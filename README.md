# Sales Order System - PT Maju Jaya

Sistem Sales Order berbasis web menggunakan CodeIgniter 3 untuk membantu proses pengelolaan penjualan pada PT Maju Jaya Elektronik.

## Fitur Utama

* Login Multi Role (Admin, Sales, Manager)
* CRUD Produk
* CRUD Pelanggan
* CRUD Sales
* Manajemen Sales Order
* Status Order (Draft, Dikirim, Selesai, Dibatalkan)
* Laporan Penjualan
* Filter Laporan berdasarkan Periode
* Cetak PDF Laporan
* Dashboard Statistik & Grafik Penjualan

## Teknologi

* PHP
* CodeIgniter 3
* MySQL
* Bootstrap
* Chart.js

## Cara Menjalankan Project

1. Clone repository
2. Pindahkan folder ke htdocs
3. Import database `salesorder.sql`
4. Jalankan XAMPP Apache & MySQL
5. Akses melalui browser:
   http://localhost/salesorder_ayu

## Hak Akses

### Admin

* Mengelola produk
* Mengelola pelanggan
* Mengelola sales
* Mengelola semua order
* Melihat laporan

### Sales

* Membuat sales order
* Melihat order milik sendiri

### Manager

* Melihat laporan penjualan

## Database

Database menggunakan file:
`salesorder.sql`