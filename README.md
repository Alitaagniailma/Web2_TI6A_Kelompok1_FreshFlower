# 🌸 Fresh Flower
## Sistem Penjualan Bunga Segar Berbasis Web

Fresh Flower merupakan aplikasi penjualan bunga berbasis web yang dikembangkan sebagai Project Akhir Mata Kuliah **Pemrograman Web 2**. Aplikasi ini dibangun menggunakan **PHP Native**, **HTML**, **CSS**, **JavaScript**, dan **MySQL** untuk memudahkan proses penjualan bunga secara online serta pengelolaan data oleh admin.

---

# 👥 Anggota Kelompok

| Nama | NIM | Role |
|------|------|------|
| Sindi Febrianti | 2306700034 | System Analyst |
| Devitha Paradila | 2306700005 | Backend Developer |
| Yuyun Yunengsih | 2306700021 | Database Engineer |
| Alita Agnia Ilma | 2306700022 | Frontend Developer |
| Leti Kurnia Sari | 2306700019 | UI/UX Designer |

---

# 🛠️ Teknologi yang Digunakan

- PHP Native
- HTML5
- CSS3
- JavaScript
- MySQL
- Laragon
- Git & GitHub

---

# 📂 Struktur Repository

```
Web2_TI6A_Kelompok1_FreshFlower
│
├── admin/
│   ├── kategori/
│   ├── produk/
│   ├── pesanan/
│   ├── pembayaran/
│   ├── pelanggan/
│   └── laporan/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── components/
│
├── index.html
├── katalog.html
├── checkout.html
├── login.html
├── register.html
├── README.md
└── .gitignore
```

---

# 🚀 Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone https://github.com/Alitaagniailma/Web2_TI6A_Kelompok1_FreshFlower.git
```

## 2. Jalankan Laragon

Aktifkan:

- Apache
- MySQL

## 3. Import Database

- Buka phpMyAdmin.
- Buat database **fresh_flower**.
- Import file `fresh_flower.sql`.

## 4. Konfigurasi Database

Sesuaikan file:

```
admin/koneksi.php
```

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "fresh_flower";
```

## 5. Jalankan Project

Buka browser:

```
http://localhost/freshflower
```

---

# 📌 Fitur Sistem

## Admin

- Login Admin
- Dashboard
- CRUD Produk
- CRUD Kategori
- Manajemen Pesanan
- Verifikasi Pembayaran
- Data Pelanggan
- Laporan Penjualan

## Pelanggan

- Registrasi
- Login
- Melihat Produk
- Detail Produk
- Keranjang Belanja
- Checkout
- Tracking Pesanan
- Riwayat Pesanan

---

# 📸 Tampilan Aplikasi

Tambahkan screenshot pada bagian berikut.

| Halaman | Preview |
|---------|---------|
| Home | *(Screenshot)* |
| Katalog | *(Screenshot)* |
| Detail Produk | *(Screenshot)* |
| Dashboard Admin | *(Screenshot)* |

---

# 🎨 Prototype

Balsamiq:

https://balsamiq.cloud/spopkkn/pmf4jw


---


# 📖 Lisensi

Project ini dibuat untuk keperluan akademik sebagai tugas Mata Kuliah **Pemrograman Web 2** Program Studi Teknik Informatika Universitas Mandiri.
