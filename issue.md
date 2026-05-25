# Project Task: Product & Gallery CRUD Implementation

## Overview
Tugas ini bertujuan untuk membangun fitur CRUD (Create, Read, Update, Delete) untuk entitas `Product` (termasuk data `Galery`). Tugas ini dirancang secara umum untuk diimplementasikan oleh developer selanjutnya.

## Tasks

### 1. Controller Setup
- Buat folder `Admin` di dalam folder Controllers.
- Buat file `ProductController` menggunakan struktur resource di dalam folder tersebut.
- Implementasikan fungsi CRUD untuk tabel `products`.
- Proses pengelolaan data `galeries` (penambahan/penghapusan) ditangani bersamaan di dalam `ProductController` ini.

### 2. Manajemen File Upload (Image)
- Simpan file upload (gambar) di *storage local* dan simpan tautan/url filenya di database.
- Pada fungsi *update* (edit): Jika ada gambar baru yang diupload, pastikan file gambar lama dihapus dari *storage*.
- Pada fungsi *destroy* (delete): Pastikan file gambar yang terkait juga ikut terhapus dari *storage*.

### 3. Routing
- Daftarkan route di dalam `routes/web.php`.
- Masukkan *route* untuk `ProductController` ini ke dalam *group route* yang memiliki *prefix* `admin` dan dilindungi oleh *middleware* `auth`.

### 4. Views
- Buat folder `admin/product` di dalam folder `resources/views`.
- Buat file-file *view* standar untuk keperluan CRUD (seperti index, create, dan edit).

## Notes
- Implementasikan fungsionalitas intinya saja.
- Pastikan siklus upload dan hapus file berjalan dengan baik agar tidak meninggalkan *file sampah* di *storage*.
