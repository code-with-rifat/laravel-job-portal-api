<?php

namespace App\Controllers;

use App\Services\\JobPortalApiService;

class JobPortalApiController
{
    private JobPortalApiService $service;

    public function __construct()
    {
        $this->service = new JobPortalApiService();
    }

    public function handleRequest(array $request): array
    {
        if (empty($request)) {
            return [
                'code' => 400,
                'status' => 'error',
                'message' => 'Invalid or empty request payload'
            ];
        }

        $result = $this->service->process($request);

        return [
            'code' => 200,
            'status' => 'success',
            'response' => $result
        ];
    }

    public function status(): array
    {
        return [
            'service' => 'Laravel Job Recruitment & Candidate ATS API',
            'version' => '1.0.0',
            'status' => 'operational'
        ];
    }
}