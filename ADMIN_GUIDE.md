# Admin Panel Guide - Filament v4

## Getting Started

### Prerequisites
- PHP 8.2+
- Laravel 12
- MySQL database running
- Filament v4

### Starting the Application

```bash
# 1. Install dependencies (if not already done)
composer install

# 2. Configure environment
cp .env.example .env

# 3. Generate app key
php artisan key:generate

# 4. Run migrations
php artisan migrate

# 5. Seed test data
php artisan db:seed

# 6. Start the server (using Herd or Laravel)
php artisan serve
# or with Herd: herd open
```

## Admin Panel Access

**URL:** `http://projectaspirasisiswa.test/admin`

**Default Login Credentials:**
- Email: `admin@rahasia.com`
- Password: `admin123!@#`

## Core Features

### 1. 📋 Aspirasi Masuk (Incoming Aspirations)

**Location:** Admin Panel → Aspirasi Masuk

**Actions:**
- **View List:** See all student submissions with NIS, category, location, description, and submission date
- **Filter:** Filter by kategori (Fasilitas, Keamanan, Kebersihan, Pembelajaran, Lainnya)
- **Search:** Search by NIS, category, location, or description
- **View Details:** Click record to see full details
- **Delete:** Remove aspirations (bulk or individual)

**Key Fields:**
- ID Aspirasi (unique identifier)
- NIS (Nomor Induk Siswa)
- Kategori (Category of report)
- Lokasi (Location)
- Keterangan (Description)
- Tanggal (Submission date/time)

### 2. ✅ Aspirasi Follow-up (Status & Feedback)

**Location:** Inside each Aspirasi Masuk record → Aspirasi tab

**Actions:**
- **Create Follow-up:** Add response/feedback to student aspiration
- **View Status:** Check current status (Menunggu/Proses/Selesai)
- **Update Status:** Change progress status
- **Add Feedback:** Provide admin notes or response to student
- **Delete:** Remove follow-up record

**Status Workflow:**
1. **Menunggu** (Waiting) - Initial state, pending admin action
2. **Proses** (In Progress) - Admin actively working on the issue
3. **Selesai** (Completed) - Issue resolved and student notified

### 3. 👤 Manajemen Pengguna (User Management)

**Location:** Admin Panel → Users

**Actions:**
- **View All Admins:** List all admin accounts
- **Create Admin:** Add new admin user
- **Edit Admin:** Update admin details (name, email, password)
- **Delete Admin:** Remove admin accounts

**Admin Roles:**
- Super Admin - Full access
- Admin - Manage aspirations and responses

## Database Structure

| Table | Purpose | Key Fields |
|-------|---------|-----------|
| `users` | Admin accounts | id, name, email, password, created_at |
| `siswas` | Student master data | id, nis (unique), nama, jurusan, created_at |
| `input_aspirasis` | Student submissions | id, nis (FK), kategori, lokasi, keterangan, created_at |
| `aspirasis` | Admin follow-ups | id, input_aspirasi_id (FK), status, feedback, created_at |

## Test Data

Default seeded records:
- **5 Student Accounts:** NIS 12345 - 12350
- **1 Admin Account:** admin@rahasia.com / admin123!@#

## Common Admin Tasks

### Create New Admin Account
1. Go to Admin Panel → Users
2. Click "Create"
3. Fill in: Name, Email, Password
4. Click "Create"

### Follow up on Student Aspiration
1. Go to Aspirasi Masuk
2. Click on aspiration record
3. Scroll to "Aspirasi" section
4. Click "Create" under follow-up table
5. Set status and add feedback
6. Click "Create"

### Search & Filter
1. Use the search bar to find aspirations by NIS, location, or keywords
2. Use kategori filter dropdown to view specific categories
3. Results update automatically

### Bulk Actions
1. Select multiple aspirations using checkboxes
2. Click "Bulk Actions" dropdown
3. Choose action (Delete, Export, etc.)
4. Confirm action

## Useful Commands

```bash
# Run migrations fresh (wipes & rebuilds database)
php artisan migrate:fresh --seed

# Create new admin user from CLI
php artisan tinker
>>> $user = \App\Models\User::factory()->create(['email' => 'newadmin@test.com', 'password' => Hash::make('password')]);

# Check database connection
php artisan db:show

# Clear cache
php artisan cache:clear
```

## Important Notes

- **Students:** Public forms (no login required) at `/pengaduan` (submit) and `/cek-aspirasi` (check status)
- **Admins:** Protected routes requiring authentication
- **Database:** MySQL only (as per project specifications)
- **Character Set:** `utf8mb4_unicode_ci` (supports emoji and full Unicode)
- **Rate Limiting:** Public forms have anti-spam protection

## Troubleshooting

**Can't connect to admin panel?**
- Verify MySQL is running
- Check `.env` database credentials
- Run `php artisan migrate` to create tables

**Merge conflicts in resources?**
- Check for unmerged git branches
- Run `git status` to see conflicted files
- Resolve conflicts manually or use `git merge --abort`

**Admin page shows blank?**
- Clear cache: `php artisan cache:clear`
- Clear config: `php artisan config:clear`
- Rebuild assets: `npm run build`
