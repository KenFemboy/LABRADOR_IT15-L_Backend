<?php
// config/cors.php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */
    'paths' => ['api/*'], // apply to API routes
    'allowed_methods' => ['*'], // allow all methods
    'allowed_origins' => ['http://localhost:5173'], // React dev server URL
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // needed if using Sanctum cookies
];