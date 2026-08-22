<?php

/**
 * API Routes Definition for laravel-job-portal-api
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/job-portal-api' => ['App\Controllers\\JobPortalApiController', 'index'],
    'POST /api/v1/job-portal-api' => ['App\Controllers\\JobPortalApiController', 'store'],
    'GET /api/v1/job-portal-api/{id}' => ['App\Controllers\\JobPortalApiController', 'show'],
    'DELETE /api/v1/job-portal-api/{id}' => ['App\Controllers\\JobPortalApiController', 'destroy']
];