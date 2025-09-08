<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:100|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email:rfc,dns|max:255',
            'subject' => 'required|string|min:5|max:200|regex:/^[a-zA-Z0-9\s\-_.,!?]+$/',
            'message' => 'required|string|min:10|max:1000',
            'project_type' => 'nullable|string|in:web_development,ecommerce,api_development,consulting,other',
            'budget' => 'nullable|string|in:under_5000,5000_10000,10000_25000,25000_plus,discuss',
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'Name can only contain letters and spaces.',
            'subject.regex' => 'Subject contains invalid characters.',
            'message.min' => 'Message must be at least 10 characters.',
            'message.max' => 'Message cannot exceed 1000 characters.',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags(trim($this->name)),
            'email' => filter_var($this->email, FILTER_SANITIZE_EMAIL),
            'subject' => strip_tags(trim($this->subject)),
            'message' => strip_tags(trim($this->message)),
        ]);
    }
}