<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\JobPortalApiController;

echo "========================================\n";
echo " Laravel Job Recruitment & Candidate ATS API CLI Engine\n";
echo "========================================\n\n";

$controller = new JobPortalApiController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";