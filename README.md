# 🛒 Toko Fiktif - Mini E-Commerce Laravel + Tailwind

Proyek ini adalah aplikasi Mini E-Commerce berbasis Laravel 10 dengan tampilan modern menggunakan Tailwind CSS dan autentikasi Laravel Breeze.

---

## 🚀 Fitur

- ✅ Login & Register (Laravel Breeze)
- ✅ Dashboard interaktif
- ✅ Menu navigasi: Katalog, Keranjang, Riwayat Pesanan
- ✅ Tampilan responsif & dark-mode friendly
- ✅ Struktur siap dikembangkan untuk fitur admin

---

## 📁 Struktur Folder Penting

resources/
├── views/
│ ├── dashboard.blade.php # Dashboard pengguna
│ ├── layouts/
│ │ └── navigation.blade.php # Navigasi header
routes/
└── web.php # Daftar rute utama

---

## ⚙️ Instalasi & Setup

1. Clone / salin ke direktori Laravel kamu
2. Jalankan perintah:

```bash
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate

Jalankan server Laravel:
php artisan serve
Akses: http://localhost:8000

👤 Login & Register
Akses menu Register untuk membuat akun

Setelah login, akan diarahkan ke /dashboard

Dashboard
Menampilkan menu interaktif:
Fitur	Ikon	URL
🏠 Lihat Katalog	/	
🛒 Keranjang	/cart	
📦 Pesanan	/orders	

Tombol didesain interaktif dengan gradient, animasi dan hover scaling.

Saran Pengembangan Lanjutan
Tambahkan model + migration untuk:
Product, CartItem, Order

Buat panel admin untuk kelola produk

Tambahkan sistem checkout dummy

Integrasi middleware admin & verifikasi email

Lisensi
Open-source untuk keperluan pembelajaran dan pengembangan pribadi.
