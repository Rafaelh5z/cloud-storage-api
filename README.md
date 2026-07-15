<div align="center">

# ☁️ Cloud Storage API

**REST API backend for a cloud file storage platform — built with Laravel + Docker**

[![Laravel](https://img.shields.io/badge/LARAVEL-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Docker](https://img.shields.io/badge/DOCKER-2496ED?style=flat-square&logo=docker&logoColor=white)](https://docker.com)
[![Nginx](https://img.shields.io/badge/NGINX-009639?style=flat-square&logo=nginx&logoColor=white)](https://nginx.org)
[![MySQL](https://img.shields.io/badge/MYSQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)

</div>

---

## 📌 Overview

Backend REST API for a cloud file storage platform that handles user authentication, file management, and storage operations. Built with Laravel following RESTful conventions and containerized with Docker + Nginx for consistent local and production environments. Designed to be consumed by the [cloud-storage-client](https://github.com/Rafaelh5z/cloud-storage-client) frontend.

---

## ✨ Features

- 🔐 User authentication with Laravel Sanctum / Passport
- 📁 File upload, download and deletion endpoints
- 🗂️ Folder and directory management
- 🔗 Related frontend: [cloud-storage-client](https://github.com/Rafaelh5z/cloud-storage-client)
- 🐳 Fully containerized with Docker + Nginx
- 🗄️ Database migrations and seeders included
- 🧪 PHPUnit test suite

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel |
| Language | PHP |
| Database | MySQL |
| Web Server | Nginx |
| Containerization | Docker + Docker Compose |
| Testing | PHPUnit |

---

## 🚀 Getting Started

### Prerequisites

- Docker & Docker Compose
- PHP 8+ (for local without Docker)
- Composer

### Installation with Docker

```bash
# Clone the repo
git clone https://github.com/Rafaelh5z/cloud-storage-api.git
cd cloud-storage-api

# Copy environment file
cp .env.example .env

# Start containers
docker-compose up -d

# Install dependencies
docker-compose exec app composer install

# Generate app key
docker-compose exec app php artisan key:generate

# Run migrations
docker-compose exec app php artisan migrate --seed
```

The API will be available at `http://localhost:80`

### Installation without Docker

```bash
# Install dependencies
composer install

# Copy and configure environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate --seed

# Start local server
php artisan serve
```

---

## 📁 Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/    # API controllers
│   │   └── Middleware/     # Auth and request middleware
│   └── Models/             # Eloquent models
├── config/                 # App configuration
├── database/
│   ├── migrations/         # Database schema
│   └── seeders/            # Initial data
├── docker-compose/
│   └── nginx/              # Nginx server config
├── routes/
│   └── api.php             # API routes
├── tests/                  # PHPUnit tests
├── Dockerfile
└── docker-compose.yml
```

---

## 🔗 Related

- **Frontend client:** [cloud-storage-client](https://github.com/Rafaelh5z/cloud-storage-client) — Nuxt 2 + Vue

---

## 👤 Author

**Rafael Herrera** · [GitHub](https://github.com/Rafaelh5z) · [LinkedIn](https://linkedin.com/in/rafael-herrera-sanchez)
