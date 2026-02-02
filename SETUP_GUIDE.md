# Panduan Setup Aplikasi Pengaduan Aspirasi Siswa

## Prasyarat
- PHP 8.2+
- MySQL Server (atau XAMPP, Laragon, DBngin, Docker)
- Composer
- Node.js (untuk assets)

## Langkah 1: Setup Database MySQL

### Menggunakan XAMPP:
1. Buka XAMPP Control Panel
2. Klik "Start" pada Apache dan MySQL
3. Buka phpMyAdmin (http://localhost/phpmyadmin)
4. Buat database baru dengan nama: `aspiraasi_db`

### Menggunakan Laragon:
1. Buka Laragon
2. Klik tombol Start
3. Database MySQL sudah otomatis berjalan

### Menggunakan Docker:
```bash
docker run --name mysql-aspira -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=aspiraasi_db -p 3306:3306 -d mysql:8.0
```

## Langkah 2: Install Dependencies

```bash
cd projectaspirasisiswa
composer install
npm install
```

## Langkah 3: Konfigurasi Environment

File `.env` sudah dikonfigurasi untuk MySQL:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aspiraasi_db
DB_USERNAME=root
DB_PASSWORD=
```

Jika password MySQL Anda berbeda, ubah `DB_PASSWORD` sesuai password Anda.

## Langkah 4: Jalankan Migrasi & Seeder

```bash
php artisan migrate --seed
```

Ini akan membuat semua tabel dan mengisi data siswa test.

## Langkah 5: Buat Admin User

```bash
php artisan tinker
```

Kemudian jalankan:
```php
$user = \App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('password')
]);
exit
```

## Langkah 6: Jalankan Aplikasi

```bash
php artisan serve
```

Aplikasi akan berjalan di: http://localhost:8000

## Akses Aplikasi

### Siswa (Public - Tidak perlu login):
- **Kirim Aspirasi**: http://localhost:8000/aspirasi/kirim
- **Cek Status**: http://localhost:8000/aspirasi/cek

### Admin (Login Required):
- **Panel Admin**: http://localhost:8000/admin
  - Email: `admin@example.com`
  - Password: `password`

## Data Siswa Test

NIS yang dapat digunakan untuk test:
- 12345 - Ahmad Rizki (10-A)
- 12346 - Budi Santoso (10-B)
- 12347 - Citra Dewi (11-A)
- 12348 - Dani Hermawan (11-B)
- 12349 - Eka Putri (12-A)
- 12350 - Fajar Wahyu (12-B)

## Fitur Aplikasi

### Untuk Siswa:
1. **Kirim Aspirasi**: Tanpa login, siswa hanya perlu input NIS dan form aspirasi
2. **Cek Status**: Cek status aspirasi berdasarkan NIS

### Untuk Admin:
1. **Kelola Aspirasi**: CRUD untuk semua aspirasi yang masuk
2. **Manage Feedback**: Admin bisa memberikan feedback dan mengubah status (Menunggu → Proses → Selesai)
3. **Role Management**: Menggunakan Spatie Permission untuk role-based access

## Troubleshooting

### MySQL tidak terhubung:
- Pastikan MySQL server sudah running
- Cek konfigurasi di `.env`
- Verifikasi database `aspiraasi_db` sudah dibuat

### Assets tidak tampil:
```bash
npm run build
```

### Lupa database password:
```bash
php artisan migrate --seed
# Pastikan DB_PASSWORD di .env sesuai dengan password MySQL Anda
```

---
Aplikasi siap digunakan!
