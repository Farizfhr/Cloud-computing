# Portfolio Faris Habiburrohman

Website portfolio sederhana untuk Faris Habiburrohman, mahasiswa Teknik Informatika di Universitas Muhammadiyah Semarang.

## 📋 Deskripsi Aplikasi

Aplikasi ini adalah website portfolio pribadi yang menampilkan:
- Profil dan informasi mahasiswa
- Keahlian dan teknologi yang dikuasai
- Riwayat pendidikan
- Proyek-proyek yang telah dikerjakan
- Formulir kontak dan media sosial

**Teknologi yang digunakan:**
- Laravel 11 (PHP Framework)
- Tailwind CSS (Styling)
- Blade Templating Engine
- SQLite (Database)
- Docker (Containerization)

## 🚀 Menjalankan Secara Lokal

### Prasyarat
- PHP 8.2+
- Composer
- SQLite

### Instalasi
```bash
# Clone repository
git clone <repository-url>
cd faris-portfolio

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## 🐳 Menjalankan dengan Docker

### Prasyarat
- Docker Desktop / Docker Engine
- Docker Compose

### Build dan Jalankan Container

```bash
# Build Docker image
docker build -t faris-portfolio:v1 .

# Jalankan container
docker run -d --name faris-portfolio -p 8080:80 faris-portfolio:v1

# Atau gunakan Docker Compose (direkomendasikan)
docker compose up -d
```

Aplikasi akan berjalan di `http://localhost:8080`

### Perintah Docker Compose Berguna

```bash
# Melihat status container
docker compose ps

# Melihat log
docker compose logs -f

# Menghentikan container
docker compose down

# Rebuild image setelah perubahan kode
docker compose up -d --build
```

### Health Check
Endpoint health check tersedia di `http://localhost:8080/health`

```bash
curl http://localhost:8080/health
# Response: {"status":"healthy","timestamp":"...","version":"1.0.0"}
```

## 🧪 Automated Testing

### Menjalankan Test Secara Lokal

```bash
# Jalankan semua test
php artisan test

# Jalankan test spesifik
php artisan test --filter=HealthCheckTest
```

### Test yang Tersedia
- `HealthCheckTest::test_health_check_endpoint_returns_healthy_status` - Memverifikasi endpoint /health
- `HealthCheckTest::test_portfolio_page_loads_successfully` - Memverifikasi halaman portfolio memuat dengan benar

## ⚙️ CI/CD Pipeline (GitHub Actions)

Pipeline CI/CD dikonfigurasi di `.github/workflows/ci.yml` dan akan dijalankan otomatis saat:
- Push ke branch `main` atau `master`
- Pull request ke branch `main` atau `master`

### Tahapan Pipeline
1. **Checkout** - Mengambil source code
2. **Setup PHP** - Menginstal PHP 8.2 dengan ekstensi yang diperlukan
3. **Cache Composer** - Menyimpan cache dependency untuk mempercepat build
4. **Install Dependencies** - Menginstal dependency PHP
5. **Generate Key** - Generate application key Laravel
6. **Create Database** - Membuat database SQLite
7. **Run Migrations** - Menjalankan migrasi database
8. **Run Tests** - Menjalankan automated test
9. **Build Docker Image** - Membangun Docker image
10. **Test Docker Image** - Menguji Docker image dengan health check

### Melihat Hasil Pipeline
- Buka tab **Actions** di repository GitHub
- Klik pada workflow run untuk melihat detail log

## 📁 Struktur Folder

```
faris-portfolio/
├── app/
│   ├── Http/Controllers/PortfolioController.php
│   └── ...
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php
│   │   └── portfolio/index.blade.php
│   └── ...
├── routes/
│   └── web.php
├── tests/
│   └── Feature/HealthCheckTest.php
├── docker/
│   └── apache.conf
├── .github/
│   └── workflows/ci.yml
├── Dockerfile
├── docker-compose.yml
├── .dockerignore
├── composer.json
└── README.md
```

## 📝 Environment Variables

| Variable | Deskripsi | Default |
|----------|-----------|---------|
| APP_ENV | Environment aplikasi | production |
| APP_DEBUG | Debug mode | false |
| APP_URL | URL aplikasi | http://localhost:8080 |
| DB_CONNECTION | Database driver | sqlite |
| DB_DATABASE | Path database SQLite | database/database.sqlite |

## 🔧 Konfigurasi Docker

### Dockerfile
- Base image: `php:8.2-apache`
- Menginstal ekstensi PHP: pdo_mysql, mbstring, exif, pcntl, bcmath, gd, zip
- Mengaktifkan Apache mod_rewrite
- Menginstal Composer
- Menyalin aplikasi dan menginstal dependency
- Mengkonfigurasi Apache untuk Laravel (DocumentRoot ke public/)

### docker-compose.yml
- Service `app`: Aplikasi Laravel
- Port mapping: 8080 (host) -> 80 (container)
- Volume untuk storage dan cache
- Health check endpoint `/health`
- Restart policy: `unless-stopped`

## 📄 Lisensi

Project ini dibuat untuk keperluan praktikum Cloud Computing.

---

**Faris Habiburrohman**  
Mahasiswa Teknik Informatika  
Universitas Muhammadiyah Semarang