

# Copilot Instructions

## Project Overview

This is a school aspiration/report management web application (Pengaduan Aspirasi Siswa).  
Students submit reports using only their **NIS** (Nomor Induk Siswa) — **no login required**.  
Admins manage and follow up on reports via a **Filament** admin panel.

**Core technologies**:
- PHP 8.2+ (Laravel 12 compatible)
- **Laravel 12**
- **Filament v4** (preferred in 2025; v3 patterns still mostly compatible)
- **Database: MySQL** (mandatory – do not use SQLite, PostgreSQL, or others unless explicitly asked)
- Eloquent ORM for all database interactions

**Important Database Notes**:
- Use **MySQL** as the database engine.
- In `.env`, configure the connection like this (default Laravel 12 MySQL setup):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aspiraasi_db               # ← change to your database name
DB_USERNAME=root                       # ← or your MySQL user
DB_PASSWORD=                           # ← your MySQL password
```

- Make sure the MySQL server is running (e.g., via XAMPP, Laragon, DBngin, Docker, etc.).
- Use Laravel migrations to create tables: `siswas`, `input_aspirasis`, `aspirasis`, and possibly `users` (for Filament admins).
- Character set: `utf8mb4_unicode_ci` (Laravel default – supports emoji and full Unicode).

**Key Database Structure** (based on provided documentation):
- `siswas` → student master data (at minimum: `nis` as unique key)
- `input_aspirasis` → incoming reports (laporan masuk)
  - Columns: id, nis, kategori, lokasi, keterangan/deskripsi, created_at, updated_at
- `aspirasis` → follow-up / status / reply table
  - Likely columns: id, input_aspirasi_id (foreign key), status (enum/string: Menunggu / Proses / Selesai), feedback, created_at, updated_at
- Relationships: `InputAspirasi` hasOne or hasMany `Aspirasi`

## Student Flows (Public – No Authentication)

### 1. Submit Aspiration (Create)
- Route examples: `/pengaduan` or `/submit-aspirasi`
- Form fields:
  - NIS (required, exists in `siswas`)
  - Kategori (select/dropdown – define options in code or config)
  - Lokasi (text)
  - Keterangan / Deskripsi (textarea)
- Validation rule example:
  ```php
  'nis' => 'required|exists:siswas,nis',
  ```
- On success → store in `input_aspirasis` → show success message
- On failure (NIS not found) → show clear error: "NIS tidak terdaftar"

### 2. Check Status & History (Read)
- Route: `/cek-aspirasi` or `/status`
- Input: NIS only
- Logic:
  ```php
  $laporan = InputAspirasi::where('nis', $request->nis)
      ->with('aspirasi')           // eager load relation
      ->orderByDesc('created_at')
      ->get();
  ```
- Display table with:
  - Tanggal lapor
  - Isi laporan
  - Status (from relation or default "Menunggu")
  - Feedback (from `aspirasis` if exists)

## Admin Flows (Filament Panel)

- Panel URL: usually `/admin`
- Login: uses Filament's default auth (username/password or email/password)
- Main resource: `InputAspirasiResource`
  - List all incoming reports
  - Show NIS, kategori, lokasi, keterangan, tanggal
  - Status & feedback from relation

**Handling Follow-up (because tables are separated)**:
- Preferred: **Relation Manager** for `Aspirasi`
  - In `InputAspirasiResource.php`:
    ```php
    public static function getRelations(): array
    {
        return [
            AspirasiRelationManager::class,
        ];
    }
    ```
- Alternative: custom action/button to create/update `Aspirasi` record
- Status values: Menunggu → Proses → Selesai
- Feedback: textarea for admin notes

## UI Summary Table

| Fitur          | Siswa (User)                     | Admin (Filament)                        |
|----------------|----------------------------------|-----------------------------------------|
| Login          | Tidak ada                        | Ada (Username/Password)                 |
| Menu Utama     | Form Input + Form Cek NIS        | Dashboard + Resources                   |
| Identitas      | Ketik NIS manual                 | Dari sesi login                         |
| Hak Akses      | Hanya Create & Read (milik sendiri) | Full CRUD                               |

## Development Guidelines & Reminders

- Always validate NIS existence against `siswas` table in public forms.
- Use Indonesian for user-facing text (labels, messages, errors).
- Code comments → English.
- Follow Laravel naming conventions:
  - Model: `InputAspirasi`, `Aspirasi`, `Siswa`
  - Controller: `AspirationController` (for public routes)
  - Resource: `InputAspirasiResource`
- Migrations: run `php artisan migrate` after creating them.
- Seed some `siswas` records for testing (e.g., NIS 12345, 67890).
- Rate limiting on public forms (anti-spam).
- Use Laravel 12 features where helpful (e.g., new `once()` helper, per-second rate limiting).
- Filament v4 notes (2025):
  - Faster rendering
  - Tailwind v4 support
  - New components (TipTap editor, sliders, etc.) — can be used if needed
- Do **not** assume any other database — stick to MySQL configuration.

When suggesting or generating code:
- Include proper MySQL-friendly migration syntax
- Show `.env` database block when relevant
- Prefer RelationManager pattern for admin follow-ups
- Reference official docs: Laravel 12, Filament v4

