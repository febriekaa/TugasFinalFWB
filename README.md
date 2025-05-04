<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

# 📦 Proyek Web Booking Jasa – *JasaKu*

## 📄 Deskripsi Aplikasi

**JasaKu** adalah sebuah platform web berbasis booking yang menghubungkan pengguna dengan berbagai penyedia layanan harian seperti cleaning service, jasa angkut barang, dan perbaikan AC. Aplikasi ini dirancang untuk memudahkan masyarakat dalam mencari, memesan, dan membayar jasa secara online dengan cepat dan aman.

Dengan sistem multi-role (Admin, Vendor, dan Customer), JasaKu menyediakan pengalaman terpadu mulai dari pendaftaran penyedia jasa, manajemen layanan, hingga review setelah pekerjaan selesai. Platform ini dapat diakses oleh siapa saja yang membutuhkan layanan berkualitas tanpa harus repot mencari manual.

### 🔧 Layanan yang Tersedia
- **Cleaning Service** (pembersihan rumah, kantor, dll)
- **Jasa Angkut Barang** (pindahan rumah, angkut logistik)
- **Perbaikan AC** (service, isi freon, instalasi)

### 🎯 Tujuan
Menyediakan sistem pemesanan jasa yang efisien, transparan, dan terpercaya, serta membuka peluang kerja bagi penyedia jasa lokal.

👤 Nama  
**Febri Eka wahyuni**
🆔 NIM  
**D0223012**
Mata Kuliah  
**Framework web based**
📅 Tahun  
**2025**

---

## 🧩 Role dan Fitur-fiturnya

### 🛠️ Admin
- Mengelola pengguna (aktif/nonaktif)
- Menyetujui/menolak layanan vendor
- Melihat statistik booking dan pembayaran
- Pantau Laporan

### 🧑‍🔧 Vendor (Penyedia Jasa)
- Registrasi & login
- Membuat dan mengatur layanan
- Menerima atau menolak booking
- Melihat status pembayaran
- Menandai pekerjaan selesai

### 🙋 Customer (Pengguna)
- Registrasi & login
- Mencari dan memesan layanan
- Melakukan pembayaran
- Melihat status pesanan
- Memberikan ulasan

---

## 🗃️ Tabel-tabel Database

### 🧾 Tabel: `users`

| Nama Field | Tipe Data     | Keterangan               |
|------------|---------------|--------------------------|
| id         | bigIncrements | Primary Key              |
| name       | string        | Nama lengkap             |
| email      | string        | Email unik               |
| phone      | string        | Nomor telepon            |
| address    | string        | Alamat pengguna          |
| password   | string        | Password terenkripsi     |
| timestamps | timestamps    | created_at & updated_at  |

---

### 🧾 Tabel: `roles`

| Nama Field | Tipe Data     | Keterangan                       |
|------------|---------------|----------------------------------|
| id         | bigIncrements | Primary Key                      |
| name       | string        | Nama role (admin, vendor, user)  |
| timestamps | timestamps    | created_at & updated_at          |

---

### 🧾 Tabel: `role_user` *(pivot)*

| Nama Field | Tipe Data   | Keterangan                      |
|------------|-------------|---------------------------------|
| user_id    | foreignId   | Relasi ke `users.id`            |
| role_id    | foreignId   | Relasi ke `roles.id`            |

---

### 🧾 Tabel: `categories`

| Nama Field | Tipe Data     | Keterangan              |
|------------|---------------|-------------------------|
| id         | bigIncrements | Primary Key             |
| name       | string        | Nama kategori layanan   |
| timestamps | timestamps    | created_at & updated_at |

---

### 🧾 Tabel: `services`

| Nama Field   | Tipe Data     | Keterangan                       |
|--------------|---------------|----------------------------------|
| id           | bigIncrements | Primary Key                      |
| user_id      | foreignId     | Relasi ke penyedia jasa (`users`) |
| category_id  | foreignId     | Relasi ke `categories`           |
| title        | string        | Nama layanan                     |
| description  | text          | Deskripsi                        |
| price        | decimal       | Harga jasa                       |
| location     | string        | Lokasi layanan                   |
| status       | enum          | pending / approved / rejected    |
| timestamps   | timestamps    | created_at & updated_at          |

---

### 🧾 Tabel: `bookings`

| Nama Field   | Tipe Data     | Keterangan                      |
|--------------|---------------|---------------------------------|
| id           | bigIncrements | Primary Key                     |
| customer_id  | foreignId     | Relasi ke `users`               |
| service_id   | foreignId     | Relasi ke `services`            |
| vendor_id    | foreignId     | Relasi ke `users` (vendor)      |
| booking_date | date          | Tanggal booking                 |
| booking_time | time          | Waktu booking                   |
| location     | string        | Lokasi layanan                  |
| note         | text          | Catatan tambahan                |
| status       | enum          | pending / confirmed / completed |
| timestamps   | timestamps    | created_at & updated_at         |

---

### 🧾 Tabel: `payments`

| Nama Field | Tipe Data   | Keterangan                          |
|------------|-------------|-------------------------------------|
| id         | bigIncrements | Primary Key                       |
| booking_id | foreignId   | Relasi ke `bookings`               |
| method     | enum        | manual / gateway                   |
| amount     | decimal     | Jumlah pembayaran                  |
| status     | enum        | paid / unpaid / cancelled          |
| paid_at    | timestamp   | Tanggal pembayaran                 |
| timestamps | timestamps  | created_at & updated_at            |

---

### 🧾 Tabel: `reviews`

| Nama Field   | Tipe Data     | Keterangan                       |
|--------------|---------------|----------------------------------|
| id           | bigIncrements | Primary Key                      |
| booking_id   | foreignId     | Relasi ke `bookings`             |
| customer_id  | foreignId     | Relasi ke `users`                |
| vendor_id    | foreignId     | Relasi ke `users`                |
| rating       | tinyInteger   | Skor 1–5                         |
| comment      | text          | Ulasan                           |
| timestamps   | timestamps    | created_at & updated_at          |

---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

| Tabel 1     | Tabel 2     | Jenis Relasi     |
|-------------|-------------|------------------|
| users       | roles       | many-to-many     |
| users       | services    | one-to-many      |
| users       | bookings    | one-to-many (as customer & vendor) |
| categories  | services    | one-to-many      |
| services    | bookings    | one-to-many      |
| bookings    | payments    | one-to-one       |
| bookings    | reviews     | one-to-one       |

