<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Security Configuration
    |--------------------------------------------------------------------------
    */

    'rate_limits' => [
        'contact_form' => [
            'max_attempts' => 3,
            'decay_minutes' => 60,
        ],
        'global' => [
            'max_attempts' => 100,
            'decay_minutes' => 1,
        ],
    ],

    'blocked_patterns' => [
        '/\b(script|javascript|vbscript)\b/i',
        '/<[^>]*>/i', // HTML tags
        '/\b(union|select|insert|update|delete|drop|create|alter)\b/i', // SQL
        '/\b(eval|exec|system|shell_exec)\b/i', // Code execution
        '/\b(base64_decode|file_get_contents|curl_exec)\b/i',
    ],

    'allowed_file_types' => [
        'images' => ['jpg', 'jpeg', 'png', 'gif', 'webp'],
        'documents' => ['pdf', 'doc', 'docx'],
    ],

    'security_headers' => [
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'DENY',
        'X-XSS-Protection' => '1; mode=block',
        'Referrer-Policy' => 'strict-origin-when-cross-origin',
        'Permissions-Policy' => 'geolocation=(), microphone=(), camera=()',
    ],
];