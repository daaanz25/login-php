# Simple PHP Login Form with MySQL

Ini adalah proyek **form login sederhana** yang dibuat menggunakan **PHP** dan terhubung dengan **database MySQL**. Proyek ini dibuat berdasarkan tutorial dari **Dea Aprizal** di YouTube.

## 🎯 Tujuan Proyek

Membuat sistem login dasar menggunakan PHP dan MySQL yang dapat:
- Menyimpan data user di database
- Memvalidasi data login melalui form
- Mengarahkan user ke halaman dashboard saat berhasil login

Cocok untuk pemula yang ingin belajar cara membuat sistem otentikasi sederhana menggunakan PHP Native tanpa framework.

## 🧰 Teknologi yang Digunakan

- PHP (Native)
- MySQL
- HTML/CSS (untuk tampilan form)
- XAMPP / Apache (sebagai server lokal)

## 📺 Tutorial Asli

Proyek ini dibuat mengikuti tutorial dari Dea Aprizal:

- YouTube Tutorial: [https://youtu.be/Ak6VTSekGP4?si=qhJHmLMTezB4-hAt](https://youtu.be/Ak6VTSekGP4?si=qhJHmLMTezB4-hAt)
- GitHub Dea Aprizal: [https://github.com/daaanz25/login-php](https://github.com/daaanz25/login-php)

## 📁 Struktur Folder
/login-php
├── config/ # File koneksi ke database (koneksi.php)
├── login.php # Halaman form login
├── register.php # Halaman pendaftaran user
├── dashboard.php # Halaman setelah berhasil login
├── logout.php # Untuk keluar dari sesi login
└── style.css # Tampilan dasar form login
## ⚙️ Cara Menjalankan

1. Clone repositori ini atau download ZIP-nya.
2. Jalankan XAMPP dan aktifkan Apache & MySQL.
3. Buat database di phpMyAdmin dengan nama `login_php` (atau sesuai dengan file `koneksi.php`).
4. Import file SQL untuk membuat tabel `users`.
5. Jalankan melalui browser dengan alamat `http://localhost/nama-folder/login.php`.

## 🙏 Kredit

Tutorial dan inspirasi oleh: **Dea Aprizal**  
YouTube: [Dea Aprizal](https://www.youtube.com/@deaaprizaal)

---

> Proyek ini bertujuan sebagai latihan pribadi untuk memahami dasar-dasar PHP dan sistem login.
