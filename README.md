# ESMMS (Enterprise Smart Manpower Management System)

This is the main repository for the ESMMS project, a Laravel-based application for managing enterprise workforce.

## Project Structure

- **app/** - Contains the Laravel application files.
- **docker/** - Docker setup and configuration files.
- **database/** - Database schema and migrations.
- **docs/** - Documentation for the project.

## Getting Started

### Prerequisites
- PHP >= 7.3
- Composer
- Docker (if using Docker setup)

### Installation
1. Clone the repository:
   ```
git clone https://github.com/nagasengawai-ui/ESMMS.git
   ```
2. Navigate into the project directory:
   ```
cd ESMMS
   ```
3. Install dependencies:
   ```
composer install
   ```

### Docker Setup
1. Build the Docker image:
   ```
docker-compose build
   ```
2. Run the application:
   ```
docker-compose up
   ```

### Database Migration
Run the migrations to set up the database schema:
```bash
docker-compose exec app php artisan migrate
```