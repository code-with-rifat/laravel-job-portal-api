<?php
namespace App\Models;

class CandidateApplication {
    public const STAGE_APPLIED = 'applied';
    public const STAGE_SCREENING = 'screening';
    public const STAGE_INTERVIEW = 'interview';
    public const STAGE_OFFERED = 'offered';
    public const STAGE_REJECTED = 'rejected';

    public function __construct(
        public int $id,
        public int $jobId,
        public string $candidateName,
        public string $email,
        public string $resumePdfUrl,
        public string $pipelineStage = self::STAGE_APPLIED
    ) {}
}