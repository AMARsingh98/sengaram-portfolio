<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:5,1')->only('submit'); // 5 attempts per minute
    }

    public function submit(Request $request)
    {
        // Rate limiting by IP
        $key = 'contact-form:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            throw ValidationException::withMessages([
                'email' => "Too many attempts. Please try again in {$seconds} seconds."
            ]);
        }

        // Enhanced validation with security rules
        $request->validate([
            'name' => 'required|string|min:2|max:100|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email:rfc,dns|max:255',
            'subject' => 'required|string|min:5|max:200|regex:/^[a-zA-Z0-9\s\-_.,!?]+$/',
            'message' => 'required|string|min:10|max:1000',
            'project_type' => 'nullable|string|in:web_development,ecommerce,api_development,consulting,other',
            'budget' => 'nullable|string|in:under_5000,5000_10000,10000_25000,25000_plus,discuss',
            'newsletter' => 'nullable|boolean',
        ], [
            'name.regex' => 'Name can only contain letters and spaces.',
            'subject.regex' => 'Subject contains invalid characters.',
            'message.min' => 'Message must be at least 10 characters.',
            'message.max' => 'Message cannot exceed 1000 characters.',
        ]);

        // Security checks
        $suspiciousPatterns = [
            '/\b(script|javascript|vbscript)\b/i',
            '/<[^>]*>/i', // HTML tags
            '/\b(union|select|insert|update|delete|drop|create|alter)\b/i', // SQL
            '/\b(eval|exec|system|shell_exec)\b/i', // Code execution
        ];

        foreach ($suspiciousPatterns as $pattern) {
            if (preg_match($pattern, $request->message) || preg_match($pattern, $request->subject)) {
                RateLimiter::hit($key, 3600); // Block for 1 hour
                return redirect()->route('contact')->with('error', 'Invalid content detected.');
            }
        }

        RateLimiter::hit($key, 60); // Normal rate limit

        // Send email with sanitized content
        try {
            $sanitizedData = [
                'name' => strip_tags(trim($request->name)),
                'email' => filter_var($request->email, FILTER_SANITIZE_EMAIL),
                'subject' => strip_tags(trim($request->subject)),
                'message' => strip_tags(trim($request->message)),
                'project_type' => $request->project_type ?: 'Not specified',
                'budget' => $request->budget ?: 'Not specified',
                'ip' => $request->ip(),
                'user_agent' => substr($request->userAgent(), 0, 200),
            ];

            Mail::raw(
                "New Contact Form Submission\n\n" .
                "Name: {$sanitizedData['name']}\n" .
                "Email: {$sanitizedData['email']}\n" .
                "Subject: {$sanitizedData['subject']}\n" .
                "Project Type: {$sanitizedData['project_type']}\n" .
                "Budget: {$sanitizedData['budget']}\n" .
                "IP Address: {$sanitizedData['ip']}\n" .
                "User Agent: {$sanitizedData['user_agent']}\n\n" .
                "Message:\n{$sanitizedData['message']}\n\n" .
                "Sent from: SENGARAM Portfolio",
                function ($message) use ($sanitizedData) {
                    $message->to('amarsinghsengar98@gmail.com')
                           ->subject('Portfolio Contact: ' . $sanitizedData['subject'])
                           ->replyTo($sanitizedData['email'], $sanitizedData['name']);
                }
            );
            
            return redirect()->route('contact')->with('success', 'Thank you for your message! I\'ll get back to you within 24 hours.');
        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage(), ['ip' => $request->ip()]);
            return redirect()->route('contact')->with('error', 'Sorry, there was an error sending your message. Please try again or email me directly.');
        }
    }
}