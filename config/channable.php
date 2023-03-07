<?php

return [
    'api_token' => env('CHANNABLE_API_TOKEN'),
    'company_id' => env('CHANNABLE_COMPANY_ID'),
    'project_id' => env('CHANNABLE_PROJECT_ID'),
    'base_url' => env('CHANNABLE_BASE_URL', 'https://api.channable.com'),
    'version' => env('CHANNABLE_VERSION', 'v1')
 ];