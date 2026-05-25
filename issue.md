# Project Task: Vhouse Database & Storage Setup

## Overview
Proyek ini membutuhkan setup awal untuk database dan storage. Tugas ini ditujukan untuk developer selanjutnya.

## Tasks

### 1. Database Migration - Product Table
Buat migration beserta model untuk tabel `products` dengan kolom-kolom berikut:
- `id`
- `name` (varchar)
- `price` (integer)
- `stock` (integer)
- `image` (text)
- `lt` (integer)
- `lb` (integer)
- `flors` (integer)
- `badroom` (integer)
- `bathrom` (integer)
- `garage` (integer)

### 2. Database Migration - Gallery Table
Buat migration beserta model untuk tabel `galeries` dengan kolom-kolom berikut:
- `id`
- `product_id` (integer, foreign key ke tabel products)
- `image` (text)

### 3. Storage Configuration
- Hubungkan local storage dengan folder public (buat symlink) agar file gambar yang diupload nantinya bisa diakses secara publik.

## Notes
- Cukup buat struktur dasarnya saja.
- Pastikan migration berjalan dengan baik.
- Terapkan relasi dasar antara Product dan Galery di dalam model masing-masing jika diperlukan.
