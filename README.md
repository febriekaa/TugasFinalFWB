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

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

<h1 align="center">Jasaku</h1>
<br>
<h3 align="center">Booking jasa seperti cleaning service, jasa angkut barang, atau perbaikan AC</h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/3e809a21-1b25-4ef9-8e78-3bc97377b749" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>FEBRI EKA WAHYUNI</strong><br/><br/>
  <strong>D0223012</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

<h1>Role dan Fitur</h1>


### fitur Admin

| *Fitur*              | *Deskripsi*                                                                 |
|------------------------|--------------------------------------------------------------------------------|
| Kelola Data Pengguna   | Menambah, mengubah, dan menghapus user dengan peran (admin, teknisi, customer). |
| Kelola Data Cabang     | Mengatur informasi cabang Repairin seperti alamat, jam operasional, dan kontak. |
| Kelola Data Layanan    | Menambah, mengedit, dan menghapus layanan perbaikan seperti servis HP, laptop, dan lainnya. |
| Kelola Booking         | Melihat semua permintaan layanan yang masuk dari customer beserta statusnya.    |
| Kelola Transaksi       | Melihat dan mengelola data pembayaran dari customer untuk layanan perbaikan.    |

### Fitur Teknisi

| *Fitur*                  | *Deskripsi*                                                                 |
|----------------------------|-------------------------------------------------------------------------------|
| Melihat Daftar Booking     | Menampilkan daftar permintaan perbaikan yang dialokasikan ke teknisi tersebut. |
| Konfirmasi Booking         | Menerima atau menolak permintaan layanan perbaikan dari customer.             |
| Mengatur Status Booking    | Menandai status proses perbaikan: menunggu, diproses, selesai, dibatalkan, dll. |

### Fitur Customer

| *Fitur*                         | *Deskripsi*                                                                                   |
|----------------------------------|--------------------------------------------------------------------------------------------------|
| Melihat & Memilih Cabang         | Menampilkan daftar cabang Repairin yang tersedia untuk dipilih.                                 |
| Melihat & Memilih Layanan        | Menampilkan layanan perbaikan seperti servis HP, laptop, TV, dan lainnya.                       |
| Melihat & Memilih Teknisi        | Memilih teknisi yang tersedia dari cabang yang telah dipilih.                                   |
| Melihat & Memilih Jadwal         | Menentukan tanggal dan waktu layanan perbaikan.                                                 |
| Memilih Metode Pembayaran        | Memilih metode pembayaran  tunai                |
| Memilih Jenis Layanan (Tempat/Home) | Menentukan apakah akan datang ke cabang atau meminta teknisi datang ke lokasi (home service). |
| Melihat Riwayat Booking          | Melihat daftar layanan perbaikan sebelumnya dan statusnya.                                      |

### Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel: users

| *Field*     | *Tipe Data*                 | *Keterangan*                                                |
|---------------|-------------------------------|----------------------------------------------------------------|
| id            | BIGINT UNSIGNED AI            | Primary key                                                    |
| name          | VARCHAR(100)                  | Nama lengkap user                                              |
| email         | VARCHAR(150) UNIQUE           | Email user (unik)                                              |
| password      | VARCHAR(255)                  | Password (dihash)                                              |
| role          | ENUM('admin','teknisi','customer') | Jenis peran pengguna dalam sistem Repairin                     |
| created_at    | TIMESTAMP                     | Waktu data dibuat                                              |
| updated_at    | TIMESTAMP                     | Waktu terakhir data diperbarui                                 |

### 2. Tabel: cabang

| *Field*     | *Tipe Data*        | *Keterangan*                          |
|---------------|----------------------|------------------------------------------|
| id            | BIGINT UNSIGNED AI   | Primary key                              |
| nama          | VARCHAR(100)         | Nama cabang Repairin                     |
| alamat        | TEXT                 | Alamat lengkap cabang                    |
| kota_kab      | VARCHAR(100)         | Nama kota atau kabupaten lokasi cabang   |
| created_at    | TIMESTAMP            | Waktu data dibuat                        |
| updated_at    | TIMESTAMP            | Waktu terakhir data diperbarui           |


### 3. Tabel: layanan

| *Field*     | *Tipe Data*        | *Keterangan*                                      |
|---------------|----------------------|------------------------------------------------------|
| id            | BIGINT UNSIGNED AI   | Primary key                                          |
| nama          | VARCHAR(100)         | Nama layanan perbaikan                              |
| deskripsi     | TEXT NULL            | Deskripsi layanan perbaikan (opsional)              |
| harga         | DECIMAL(10,2)        | Biaya layanan perbaikan                             |
| durasi        | INT                  | Perkiraan durasi layanan (dalam hari)              |
| created_at    | TIMESTAMP            | Waktu data dibuat                                   |
| updated_at    | TIMESTAMP            | Waktu terakhir data diperbarui                      |


### 4. Tabel: pemesanan

| *Field*         | *Tipe Data*              | *Keterangan*                                                                 |
|-------------------|----------------------------|---------------------------------------------------------------------------------|
| id                | BIGINT UNSIGNED AI         | Primary key                                                                     |
| user_id           | BIGINT UNSIGNED            | Foreign key → users.id (customer)                                               |
| cabang_id         | BIGINT UNSIGNED            | Foreign key → cabang.id                                                         |
| layanan_id        | BIGINT UNSIGNED            | Foreign key → layanan.id                                                        |
| teknisi_id        | BIGINT UNSIGNED            | Foreign key → users.id (role = teknisi)                                         |
| penjadwalan       | DATETIME                   | Tanggal dan waktu layanan dijadwalkan                                           |
| metode_layanan    | ENUM('cabang', 'home')     | Metode layanan: di cabang Repairin atau home service                            |
| lokasi            | TEXT NULL                  | Alamat home service (jika metode_layanan = 'home')                              |
| jumlah_bayar      | DECIMAL(10,2)              | Total biaya untuk satu layanan                                                  |
| status            | ENUM('menunggu','diterima','selesai','dibatalkan') | Status dari permintaan layanan                         |
| created_at        | TIMESTAMP                  | Waktu data dibuat                                                               |
| updated_at        | TIMESTAMP                  | Waktu terakhir data diperbarui                                                  |

### 5. Tabel: transaksi

| *Field*           | *Tipe Data*                  | *Keterangan*                                                |
|---------------------|--------------------------------|----------------------------------------------------------------|
| id                  | BIGINT UNSIGNED AI             | Primary key                                                    |
| pemesanan_id        | BIGINT UNSIGNED                | Foreign key → pemesanan.id                                     |
| status_pembayaran   | ENUM('pending','paid','failed')| Status pembayaran: menunggu, berhasil, atau gagal              |
| paid_at             | TIMESTAMP NULL                 | Waktu saat pembayaran diselesaikan                             |
| created_at          | TIMESTAMP                      | Waktu data dibuat                                              |
| updated_at          | TIMESTAMP                      | Waktu terakhir data diperbarui                                 |


### Jenis Relasi dan Tabel yang Berelasi

| *Tabel Asal* | *Kolom FK*    | *Tabel Tujuan* | *Jenis Relasi* | *Keterangan*                                                                 |
|----------------|------------------|------------------|------------------|---------------------------------------------------------------------------------|
| pemesanan      | user_id          | users            | Many-to-One      | Banyak pemesanan dimiliki oleh satu customer (user)                            |
| pemesanan      | cabang_id        | cabang           | Many-to-One      | Banyak pemesanan berada di satu cabang                                         |
| pemesanan      | layanan_id       | layanan          | Many-to-One      | Banyak pemesanan mengacu ke satu layanan perbaikan                             |
| pemesanan      | teknisi_id       | users            | Many-to-One      | Banyak pemesanan dilayani oleh satu teknisi (user)                             |
| transaksi      | pemesanan_id     | pemesanan        | One-to-One       | Satu transaksi hanya untuk satu pemesanan layanan                              |