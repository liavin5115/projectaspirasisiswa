# Aspirasi Siswa — Sistem Pengaduan Aspirasi Siswa 🏫

**Sistem sederhana untuk siswa mengirim aspirasi menggunakan NIS (tanpa login)** dan admin menindaklanjuti lewat panel Filament.

---

## ⚙️ Ringkasan Fitur
- Pengiriman aspirasi publik (input NIS saja) — route: `GET /aspirasi/kirim`, `POST /aspirasi/kirim` ✅
- Cek riwayat & status berdasarkan NIS — route: `GET /aspirasi/cek`, `POST /aspirasi/cek` ✅
- Panel admin Filament untuk mengelola aspirasi & follow-up — path: `/admin` ✅
- Manajemen NIS (resource `Siswa`) ✅

---

## 🧰 Teknologi & Persyaratan
- PHP 8.2+ (dijalankan di proyek ini: PHP 8.4)
- Laravel 12
- MySQL (wajib)
- Filament (admin)
- Tailwind CSS untuk UI publik

---

## 🚀 Setup Singkat (lokal)
1. Clone repo

   git clone <repo-url>
   cd projectaspirasisiswa

2. Install dependency

   composer install
   npm install && npm run build

3. Salin file environment dan konfigurasi DB

   cp .env.example .env
   # sesuaikan DB_* di .env (MySQL)

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=aspiraasi_db
   DB_USERNAME=root
   DB_PASSWORD=

4. Migrate & seed (membuat tabel dan data uji)

   php artisan migrate --seed

5. Jalankan server

   php artisan serve
   # buka http://localhost:8000

---

## 🧪 Data uji & Akun Admin
- Beberapa NIS uji tersedia melalui seeder (`SiswaSeeder`):
  - 12345, 12346, 12347, 12348, 12349, 12350

- Akun admin (default seeder / setup):
  - Email: `admin@rahasia.com`
  - Password: `admin123!@#`

> Gunakan panel admin di `http://localhost:8000/admin` untuk mengelola aspirasi, menambah feedback, dan mengubah status.

---

## 🗂 Struktur penting
- app/Models — `Siswa`, `InputAspirasi`, `Aspirasi`, `User`
- app/Http/Controllers/AspirationController.php — kontrol publik untuk submit/cek
- resources/views/aspirations — view publik (submit, check, result)
- resources/views/chat — (dihapus) *folder tetap berisi placeholder halaman* jika ada rute tersisa
- app/Filament/Resources — resource admin (Siswa, InputAspirasi, Aspirasi, User)
- database/migrations — semua migrasi tabel

---

## 🔧 Catatan terkait chat
- Fitur _floating chat_ dihapus dari halaman publik (semua `@include('components.floating-chat')` telah dibersihkan).
- Halaman chat (`resources/views/chat/*`) diganti menjadi halaman pemberitahuan bahwa fitur telah dihapus.
- Jika Anda ingin menghapus folder chat sepenuhnya atau menonaktifkan rute terkait, beri tahu saya dan saya akan bantu hapus rute + view.

---

## ✅ Perintah berguna
- Clear view cache: `php artisan view:clear`
- Clear app cache: `php artisan cache:clear`
- Jalankan test: `php artisan test` atau `vendor/bin/pest`

---

## 📄 Lisensi
Proyek ini mengikuti lisensi MIT.

---

Terima kasih — jika mau, saya bisa menambahkan badge, petunjuk deploy Docker, atau langkah CI/CD. ✨
