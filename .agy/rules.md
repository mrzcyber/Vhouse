# Antigravity Workspace Rules

## Project Overview
Website agent property sederhana.
Stack: Laravel 13, Tailwind CSS v4, Filament (admin panel).

Fitur:
- Landing page untuk menampilkan listing properti
- Dashboard admin (Filament) hanya untuk 1 resource: Property
- Auth hanya via seeder, tidak ada registrasi

## Common Commands
```bash
php artisan serve                   # jalankan dev server
php artisan migrate                 # jalankan migrasi
php artisan migrate:fresh --seed    # reset + seed (termasuk user admin)
php artisan db:seed                 # jalankan seeder saja
npm run dev                         # compile assets (Vite)
npm run build                       # build production
php artisan cache:clear
php artisan config:clear
```

## Architecture
```
app/
  Http/Controllers/          # controller untuk landing page
  Models/                    # Property, PropertyImage, User
  Filament/Resources/        # PropertyResource (satu-satunya resource)
database/
  migrations/
  seeders/
    DatabaseSeeder.php       # seed user admin di sini
resources/
  views/
    layouts/                 # layout utama landing page
    pages/                   # halaman publik (index, detail properti)
public/
  storage/                   # symlink untuk gambar upload
routes/
  web.php                    # route landing page
```

## Data Model

### Table: `properties`
| Column        | Type      | Keterangan          |
|---------------|-----------|---------------------|
| id            | int    | primary key         |
| name          | string    | nama properti       |
|lt             |int        |luas tanah satuan m2 |
|lb             |int        |luas bangunan satuan m2 |
|floors         | int      | tingkat rumah         |
|bedrooms        | int      | jumlah kamar         |
|bathrooms      | int      | jumlah kamar mandi         |
|carports      | int      | jumlah kamar carpot         |
|description      | text      | deskripsi rumah        |
| price         | int    | harga               |
| thumbnail     | string    | path gambar utama   |
| timestamps    |           |                     |

### Table: `property_images`
| Column        | Type      | Keterangan                     |
|---------------|-----------|--------------------------------|
| id            | int    | primary key                    |
| property_id   | bigint    | foreign key → properties.id   |
| image         | string    | path gambar galeri             |
| timestamps    |           |                                |

### Relasi
- `Property` hasMany `PropertyImage`
- `PropertyImage` belongsTo `Property`

## Auth
- Tidak ada registrasi publik
- User admin dibuat via seeder saja
- Login melalui Filament default `/admin/login`

## Code Style
- Filament v3 untuk semua kebutuhan admin/dashboard
- Tailwind v4 untuk landing page
- Gunakan Eloquent, hindari raw query
- Upload file via Laravel Storage (`public` disk), jalankan `php artisan storage:link`
- Hapus file lama dari storage saat property/gambar dihapus

## Behavioral Guidelines

### Think Before Coding
- Nyatakan asumsi sebelum implementasi
- Kalau ada banyak interpretasi, tunjukkan semua — jangan pilih diam-diam
- Kalau tidak jelas, berhenti dan tanya

### Simplicity First
- Project ini sengaja dibuat sederhana — jaga tetap simpel
- Tidak ada fitur di luar yang diminta
- Tidak ada abstraksi yang tidak perlu
- Kalau bisa 50 baris tapi ditulis 200, tulis ulang

### Surgical Changes
- Sentuh hanya yang perlu
- Jangan refactor hal yang tidak rusak
- Kalau lihat sesuatu yang perlu diperbaiki tapi tidak diminta, sebut saja — jangan langsung ubah
- Hapus hanya import/variable yang perubahan kamu sendiri yang membuat unused

### Goal-Driven Execution
- Untuk multi-step task, buat plan singkat dulu sebelum eksekusi:
  1. [Step] → verify: [check]
  2. [Step] → verify: [check]
- Tanya sebelum implementasi, bukan setelah salah

### Workflow
- commit setiap perubahan untuk agar bisa selalu di review