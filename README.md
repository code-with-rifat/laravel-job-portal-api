<div align="center">

# Laravel Job Recruitment & Candidate ATS API

Applicant Tracking System (ATS) with resume upload, candidate pipeline stages, and salary filter search.

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.2-blue?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
![laravel](https://img.shields.io/badge/laravel-2563EB?style=for-the-badge&logo=laravel&logoColor=white) ![job-portal](https://img.shields.io/badge/job-portal-2563EB?style=for-the-badge&logo=job-portal&logoColor=white) ![recruitment](https://img.shields.io/badge/recruitment-2563EB?style=for-the-badge&logo=recruitment&logoColor=white) ![ats](https://img.shields.io/badge/ats-2563EB?style=for-the-badge&logo=ats&logoColor=white)

</div>

---

## Key Features

- **Modern Architecture:** Built with clean OOP principles and modern PHP 8.2+ features (Typed properties, Match expressions, Enums, Readonly classes).
- **High Performance & Security:** Input sanitization, prepared statements, CSRF protection, and memory-safe design.
- **PSR Standards:** Complies with PSR-4 (Autoloading), PSR-7 / PSR-15 (HTTP Messages & Middleware), and PSR-12 (Coding Style).
- **Test-Driven:** Ready-to-run unit and integration test suite with PHPUnit.
- **Developer Friendly:** Comprehensive API documentation, typed methods, and instant Docker/Composer setup.

---

## Getting Started

### Requirements
- PHP >= 8.2
- Composer 2.x
- MySQL 8.0+ / SQLite / Redis

### Installation

`ash
# Clone the repository
git clone https://github.com/code-with-rifat/laravel-job-portal-api.git

# Navigate into project directory
cd laravel-job-portal-api

# Install dependencies via Composer
composer install

# Copy environment configuration
cp .env.example .env

# Run database migrations or initial seeders (if applicable)
php cli.php migrate
`

---

## Directory Structure

`	ext
|-- src/
|   |-- Controllers/        # Request Handlers & Business Controllers
|   |-- Models/             # Domain Entities & Database Wrappers
|   |-- Services/           # Reusable Application Services & Logic
|   |-- Middleware/         # HTTP Middleware & Request Filters
|   |-- Config/             # System Configuration & Database Connector
|-- config/                 # Environment and App Config Files
|-- tests/                  # PHPUnit Test Suite
|-- public/                 # Web Entry Point (index.php)
|-- .env.example            # Environment variables template
|-- composer.json           # Dependency & Autoload definitions
|-- README.md               # Documentation
`

---

## Running Tests

Run the test suite using PHPUnit:

`ash
./vendor/bin/phpunit
`

---

## Author

**Riazul Islam Rifat**
* GitHub: [@code-with-rifat](https://github.com/code-with-rifat)
* Email: [hriazul45@gmail.com](mailto:hriazul45@gmail.com)

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.