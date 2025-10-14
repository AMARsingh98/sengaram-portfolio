<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProfileImageController extends Controller
{
    public function getLinkedInImage()
    {
        $linkedinProfileUrl = 'https://www.linkedin.com/in/amar-singh-sengar-a57670183/';
        
        // Cache for 1 hour to avoid too many requests
        $imageUrl = Cache::remember('linkedin_profile_image', 3600, function () use ($linkedinProfileUrl) {
            try {
                $response = Http::timeout(10)->get($linkedinProfileUrl);
                
                if ($response->successful()) {
                    $html = $response->body();
                    
                    // Extract profile image URL from LinkedIn page
                    if (preg_match('/"image":\s*"([^"]+)"/', $html, $matches)) {
                        return $matches[1];
                    }
                    
                    // Fallback pattern
                    if (preg_match('/profile-photo-\d+x\d+[^"]*\.jpg/', $html, $matches)) {
                        return 'https://media.licdn.com/dms/image/' . $matches[0];
                    }
                }
            } catch (\Exception $e) {
                \Log::error('LinkedIn image fetch failed: ' . $e->getMessage());
            }
            
            return null;
        });
        
        if ($imageUrl) {
            try {
                $imageResponse = Http::timeout(10)->get($imageUrl);
                
                if ($imageResponse->successful()) {
                    return response($imageResponse->body())
                        ->header('Content-Type', 'image/jpeg')
                        ->header('Cache-Control', 'public, max-age=3600');
                }
            } catch (\Exception $e) {
                \Log::error('Image proxy failed: ' . $e->getMessage());
            }
        }
        
        // Return defaultProfileImage if all fails
        return response()->file(public_path('images/defaultProfileImage.jpeg'));
    }
}