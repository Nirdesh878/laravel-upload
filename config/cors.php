<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // add sanctum
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000'], // ✅ no wildcard
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // ✅ must be true for Sanctum
];
