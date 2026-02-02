# Panduan Manajemen NIS (Nomor Induk Siswa)

## Fitur Keamanan: Hanya NIS Terdaftar yang Bisa Mengirim Aspirasi

Sistem ini mengimplementasikan validasi ketat untuk memastikan hanya siswa terdaftar yang dapat mengirim aspirasi.

### Bagaimana Cara Kerjanya?

1. **Database Siswa**: Semua NIS siswa disimpan di tabel `siswas` dengan informasi:
   - NIS (Nomor Induk Siswa) - Primary Key
   - Nama Siswa
   - Kelas

2. **Validasi pada Form Submission**:
   - Ketika siswa ingin mengirim aspirasi, sistem mengecek apakah NIS ada di database
   - Jika NIS tidak terdaftar → Tampilkan error: "NIS tidak terdaftar. Hubungi admin untuk mendaftarkan NIS Anda."
   - Jika NIS terdaftar → Aspirasi dikirim dengan sukses

3. **Validasi pada Cek Status**:
   - Sama seperti form submission, cek status juga memerlukan NIS terdaftar
   - Siswa hanya bisa melihat aspirasinya sendiri berdasarkan NIS

---

## Admin Panel: Manajemen NIS

### Mengakses Halaman Manajemen NIS

1. Login ke Admin Panel (`/admin`)
2. Di sidebar menu, klik **"Manajemen NIS"** atau **"NIS Siswa"**

### Fitur-Fitur yang Tersedia

#### 1. **Melihat Daftar NIS Terdaftar**
- Menampilkan semua siswa yang terdaftar
- Kolom: NIS, Nama Siswa, Kelas, Tanggal Terdaftar
- Fitur pencarian (cari berdasarkan NIS atau nama)
- Sorting (urutkan berdasarkan kolom apapun)

#### 2. **Menambah NIS Baru**
- Klik tombol **"Tambah NIS Baru"**
- Isi form:
  - **NIS**: Nomor Induk Siswa (harus unik, tidak boleh duplikat)
  - **Nama Siswa**: Nama lengkap siswa
  - **Kelas**: Kelas siswa (optional, contoh: X-A, XI-B)
- Klik **"Buat"** untuk menambah

#### 3. **Mengedit Data NIS**
- Klik icon **Edit** pada baris siswa yang ingin diubah
- Ubah data yang diperlukan
- NIS tidak bisa diubah (sudah terkunci untuk mencegah kesalahan)
- Klik **"Simpan"** untuk menyimpan perubahan

#### 4. **Menghapus NIS**
- Klik icon **Hapus** pada baris siswa
- Atau saat sedang di halaman edit, klik **"Hapus"** di atas
- Konfirmasi penghapusan

#### 5. **Penghapusan Massal**
- Centang checkbox siswa yang ingin dihapus
- Klik **"Hapus"** di menu massal
- Konfirmasi penghapusan

---

## Penyimpanan Data NIS

### Struktur Tabel `siswas`:
```sql
CREATE TABLE siswas (
    nis VARCHAR(255) PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    kelas VARCHAR(255) NULLABLE,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Import Data NIS Massal

Jika ingin menambahkan banyak NIS sekaligus, bisa menggunakan seeder:

```bash
# Jalankan seeder untuk menambah data sampel
php artisan db:seed --class=SiswaSeeder
```

Data sampel yang ditambahkan:
- 2024001 - Ahmad Rizki (X-A)
- 2024002 - Budi Santoso (X-A)
- 2024003 - Citra Dewi (X-B)
- ... dan seterusnya

---

## Pesan Error dan Penjelasan

### Error pada Siswa:

| Error | Penyebab | Solusi |
|-------|---------|--------|
| "NIS tidak terdaftar. Hubungi admin untuk mendaftarkan NIS Anda." | NIS tidak ada di database | Hubungi admin untuk mendaftarkan NIS |
| "NIS tidak boleh kosong." | Form NIS kosong | Isi NIS dengan benar |
| "Kategori aspirasi harus dipilih." | Kategori tidak dipilih | Pilih kategori aspirasi |
| "Keterangan aspirasi minimal 10 karakter." | Deskripsi terlalu pendek | Isi deskripsi dengan minimal 10 karakter |

### Error pada Admin:

| Error | Penyebab | Solusi |
|-------|---------|--------|
| "NIS sudah terdaftar" | Ada NIS duplikat | Gunakan NIS yang berbeda |
| "NIS tidak boleh kosong" | Field NIS kosong | Isi NIS terlebih dahulu |
| "Nama Siswa tidak boleh kosong" | Field nama kosong | Isi nama siswa |

---

## Contoh Alur Kerja

### Untuk Admin:

1. **Hari pertama**:
   - Login ke admin panel
   - Buka "Manajemen NIS"
   - Tambahkan semua NIS siswa
   - Klik "Tambah NIS Baru"
   - Isi data siswa (contoh: NIS 2024001, Nama: Ahmad Rizki, Kelas: X-A)
   - Simpan

2. **Ketika ada siswa baru**:
   - Tambahkan NIS siswa baru dengan cara yang sama
   - Informasikan NIS kepada siswa

3. **Monitoring**:
   - Lihat daftar siswa yang sudah terdaftar
   - Setiap siswa di daftar sudah bisa mengirim aspirasi

### Untuk Siswa:

1. **Pertama kali**:
   - Akses halaman "Kirim Aspirasi"
   - Masukkan NIS yang sudah didaftarkan admin
   - Isi form aspirasi
   - Klik "Kirim Aspirasi"

2. **Cek status**:
   - Akses halaman "Cek Status Aspirasi"
   - Masukkan NIS
   - Lihat semua aspirasimu dan statusnya

---

## Tips & Trik

### Untuk Admin:

- **Backup NIS**: Selalu backup data NIS sebelum operasi massal
- **Format Konsisten**: Gunakan format NIS yang konsisten (contoh: 2024001, bukan 024001)
- **Validasi**: Pastikan tidak ada duplikat NIS sebelum menambah
- **Import Massal**: Gunakan seeder untuk import data banyak

### Untuk Siswa:

- **Catat NIS**: Catat NIS Anda dengan baik, gunakan itu untuk semua transaksi
- **Verifikasi**: Pastikan NIS benar sebelum submit (tidak bisa diubah setelah submit)
- **Tracking**: Gunakan halaman "Cek Status" untuk track aspirasi Anda

---

## Troubleshooting

### NIS tidak bisa ditambah meski sudah diisi

**Solusi**:
- Pastikan NIS belum terdaftar sebelumnya (cek duplikat)
- Pastikan format NIS valid (tidak ada karakter khusus)
- Refresh halaman dan coba lagi

### Siswa tidak bisa mengirim aspirasi

**Solusi**:
- Pastikan NIS siswa sudah didaftarkan di admin panel
- Pastikan siswa memasukkan NIS dengan benar (case-sensitive)
- Cek di admin panel apakah NIS sudah ada

### Lupa NIS

**Solusi**:
- Hubungi admin untuk mengecek NIS Anda
- Admin bisa lihat di "Manajemen NIS" panel admin

---

## Keamanan

✅ **Fitur Keamanan Implementasi**:
- Hanya NIS terdaftar bisa mengirim aspirasi (prevents spam)
- Validasi server-side (tidak bisa dibypass dari client)
- Error message yang jelas untuk guidance
- Unik constraint pada NIS (tidak bisa duplikat)

---

## Catatan Penting

- **Database**: Semua data NIS disimpan di tabel `siswas` (MySQL)
- **Validasi**: Dilakukan di controller dan model
- **Role**: Admin punya akses penuh ke manajemen NIS
- **Backup**: Selalu backup database sebelum modifikasi besar
