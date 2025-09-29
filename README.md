# 📚 Simple Library API

Simple RESTful API untuk mengelola data buku, dibuat menggunakan **Laravel 11** dan **MySQL**.  
Project ini merupakan bagian dari technical test.

## 🚀 Fitur

-   CRUD data buku
-   Validasi input:
    -   `title` wajib diisi
    -   `author` wajib diisi
    -   `year` harus angka dan tidak boleh lebih dari tahun sekarang
-   Response dalam format JSON

## 📂 Struktur Database

Tabel: `books`

| Kolom      | Tipe Data    | Keterangan                      |
| ---------- | ------------ | ------------------------------- |
| id         | BIGINT (AI)  | Primary Key                     |
| title      | VARCHAR(150) | Judul buku                      |
| author     | VARCHAR(100) | Penulis                         |
| year       | INT          | Tahun terbit (≤ tahun saat ini) |
| created_at | TIMESTAMP    | Otomatis dibuat Laravel         |
| updated_at | TIMESTAMP    | Otomatis dibuat Laravel         |

Seeder menambahkan minimal 5 data buku.

## ⚙️ Cara Menjalankan Project

1. Clone repository:

    git clone https://github.com/USERNAME/simple-library.git
    cd simple-library

2. Install dependency:

    composer install

3. Copy file environment:

    cp .env.example .env

4. Konfigurasi database di file `.env`:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=simple_library
    DB_USERNAME=root
    DB_PASSWORD=

5. Generate app key:

    php artisan key:generate

6. Migrasi database & jalankan seeder:

    php artisan migrate --seed

7. Jalankan server:

    php artisan serve

## 📌 Endpoint API

Base URL: `http://127.0.0.1:8000/api`

| Method | Endpoint      | Deskripsi         |
| ------ | ------------- | ----------------- |
| GET    | `/books`      | List semua buku   |
| POST   | `/books`      | Tambah buku baru  |
| GET    | `/books/{id}` | Lihat detail buku |
| PUT    | `/books/{id}` | Update data buku  |
| DELETE | `/books/{id}` | Hapus buku        |
