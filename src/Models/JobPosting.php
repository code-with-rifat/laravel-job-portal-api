<?php
namespace App\Models;

class JobPosting {
    public function __construct(
        public int $id,
        public string $jobTitle,
        public string $employmentType, // 'Full-time', 'Remote'
        public string $experienceLevel,
        public float $minSalary,
        public float $maxSalary,
        public array $requiredSkills = ['PHP', 'Laravel', 'MySQL']
    ) {}
}