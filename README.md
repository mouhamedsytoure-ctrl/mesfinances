# mesfinances

This repository contains a Laravel 10 application for personal finance tracking (mesfinances).

Quick start (using Docker)

1. Clone the repo:
   git clone https://github.com/mouhamedsytoure-ctrl/mesfinances.git
   cd mesfinances

2. Copy environment file and edit if needed:
   cp .env.example .env

3. Start containers:
   docker-compose up -d

4. Install PHP dependencies and Node packages (inside app container):
   docker-compose exec app composer install
   docker-compose exec app npm install

5. Generate app key and run migrations:
   docker-compose exec app php artisan key:generate
   docker-compose exec app php artisan migrate
   docker-compose exec app php artisan storage:link

6. Build assets (optional):
   docker-compose exec app npm run build

Open the app at: http://localhost

Notes:
- Authentication: Laravel Breeze (Blade). Public registration is enabled but limited to 10 users.
- Devises: XOF and EUR supported. Set exchange rate in Settings.
