# Implementation Plan: Vhouse Property Agent

Berdasarkan spesifikasi dari `rules.md`, berikut adalah rencana implementasi langkah demi langkah untuk membangun proyek ini. Sesuai prinsip **Goal-Driven Execution**, setiap langkah akan divalidasi sebelum melanjutkan ke langkah berikutnya.

## Fase 1: Setup & Konfigurasi Dasar
- [ ] **Step 1.1**: Verifikasi koneksi database (konfigurasi `.env`).
- [ ] **Step 1.2**: Jalankan `php artisan storage:link` untuk memastikan symlink storage aktif agar gambar dapat diakses publik.

## Fase 2: Database & Model
- [ ] **Step 2.1**: Buat migrasi dan model untuk tabel `properties` dengan kolom:
  - `id`, `name`, `lt` (int), `lb` (int), `floors` (int), `bedrooms` (int), `bathrooms` (int), `carports` (int), `description` (text), `price` (int), `thumbnail` (string), `timestamps`.
- [ ] **Step 2.2**: Buat migrasi dan model untuk tabel `property_images` dengan kolom:
  - `id`, `property_id` (bigint), `image` (string), `timestamps`.
- [ ] **Step 2.3**: Tentukan relasi `hasMany` dan `belongsTo` pada model `Property` dan `PropertyImage`.
- [ ] **Step 2.4**: Implementasi *event listener* (misal: method `boot` atau model observer) pada `Property` dan `PropertyImage` untuk menghapus berkas fisik di storage apabila baris data dihapus (Sesuai aturan Code Style).

## Fase 3: Seeder & Autentikasi
- [ ] **Step 3.1**: Tambahkan logika di `DatabaseSeeder.php` (atau `UserSeeder`) untuk membuat satu *User Admin* permanen. (Mengingat registrasi publik tidak tersedia).

## Fase 4: Panel Admin (Filament)
- [ ] **Step 4.1**: Verifikasi instalasi Filament v3.
- [ ] **Step 4.2**: Buat `PropertyResource` untuk Filament.
- [ ] **Step 4.3**: Konfigurasi form di dalam `PropertyResource` untuk:
  - Input teks, angka, dan deskripsi properti.
  - Unggah gambar (File upload) untuk `thumbnail`.
  - Repeater / Upload multi-gambar untuk relasi `PropertyImage` galeri.

## Fase 5: Landing Page (Front-End)
- [ ] **Step 5.1**: Buat controller untuk landing page (menampilkan daftar properti).
- [ ] **Step 5.2**: Buat controller/route untuk halaman detail properti.
- [ ] **Step 5.3**: Rancang UI halaman beranda (`index`) dengan Tailwind CSS v4 untuk menampilkan daftar *listing* properti.
- [ ] **Step 5.4**: Rancang UI halaman detail properti yang memuat informasi spesifik dan galeri gambar.

## Fase 6: Finalisasi & Peninjauan (Workflow)
- [ ] **Step 6.1**: Pastikan setiap fase di-*commit* ke repositori sesuai panduan alur kerja (Workflow).
- [ ] **Step 6.2**: Uji seluruh fungsionalitas (Login admin, CRUD properti + upload gambar, dan tampilan publik).
