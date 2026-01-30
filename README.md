# 🛒 E-Commerce Web Application (Laravel)

Project ini merupakan **aplikasi E-Commerce berbasis web** yang dibangun menggunakan **Laravel Framework**.  
Aplikasi ini menyediakan fitur pengelolaan produk, transaksi pemesanan, serta dashboard admin untuk memantau aktivitas pengguna dan penjualan.

Project ini cocok digunakan sebagai:
- Project pembelajaran Laravel
- Project portofolio
- Dasar pengembangan sistem E-Commerce skala kecil–menengah

---

## 🚀 Tech Stack & Tools

### Backend
- PHP 8.x
- Laravel 10+
- MySQL / MariaDB

### Frontend
- Blade Template Engine
- Bootstrap 5
- HTML5, CSS3, JavaScript

### Tools Pendukung
- Composer
- Node.js & NPM
- Git & GitHub
- VS Code

---

## ✨ Fitur Utama

### 👤 User
- Registrasi & Login
- Melihat daftar produk
- Melihat detail produk
- Menambahkan produk ke keranjang
- Checkout pesanan
- Riwayat pesanan

### 🛠️ Admin
- Dashboard Admin
- Manajemen Produk (CRUD)
- Manajemen Kategori
- Melihat daftar pesanan
- Melihat detail pesanan
- Monitoring aktivitas user

### 📊 Sistem
- Autentikasi (Laravel Auth)
- Validasi form
- Relasi database (User, Produk, Pesanan)
- UI Admin responsif

---

## 🗂️ Struktur Folder Utama

```bash
├── app
├── database
│   ├── migrations
│   └── seeders
├── resources
│   ├── views
│   ├── css
│   └── js
├── routes
│   └── web.php
├── public
└── .env
```

---

## ⚙️ Langkah Instalasi (Clone dari GitHub)

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
```

### 2️⃣ Install Dependency Backend
```bash
composer install
```

### 3️⃣ Install Dependency Frontend
```bash
npm install
npm run dev
```

### 4️⃣ Konfigurasi Environment
```bash
cp .env.example .env
```

Sesuaikan database pada file `.env`:
```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Generate Application Key
```bash
php artisan key:generate
```

### 6️⃣ Migrasi Database
```bash
php artisan migrate
```

*(Opsional: Jalankan seeder)*
```bash
php artisan db:seed
```

### 7️⃣ Jalankan Server
```bash
php artisan serve
```

Akses aplikasi:
```
http://127.0.0.1:8000
```

---

## 👨‍💻 Author

**M. Fadhillah DNR**  
Web Developer | Laravel Enthusiast  
GitHub: https://github.com/Fadhillahdnr
