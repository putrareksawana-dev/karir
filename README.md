# Karir - Job Application Portal (CI 3)

Sistem informasi rekrutmen berbasis web yang dibangun menggunakan **CodeIgniter 3**. Aplikasi ini berfungsi sebagai portal pendaftaran pelamar kerja untuk memudahkan HRD dalam mengumpulkan dan mengelola data kandidat secara terpusat.

### 📋 Alur Kerja Sistem
1. **Pelamar:** Mengakses portal, mengisi formulir pendaftaran, dan mengunggah dokumen (CV/Portofolio).
2. **Admin/HRD:** Masuk ke Dashboard untuk melihat daftar pelamar yang masuk dan mengunduh berkas mereka.
3. **Follow-up:** Proses seleksi dilakukan oleh HRD dengan menghubungi kandidat secara manual melalui kontak yang tertera (WhatsApp/Email).

### 🚀 Fitur Utama
- Form lamaran online yang responsif.
- Manajemen unggah dokumen pendukung.
- Dashboard Admin untuk pemantauan data pelamar.
- Penyimpanan data terpusat menggunakan database MySQL.

### 🛠️ Spesifikasi Teknis
- **Framework:** CodeIgniter 3.1.13 (Stable)
- **Bahasa:** PHP 7.4 / 8.x
- **Database:** MySQL
- **Template UI:** [Sebutkan jika kamu pakai Bootstrap atau AdminLTE]

### ⚙️ Cara Instalasi Lokal
1. Download atau Clone repositori ini.
2. Pindahkan folder ke dalam direktori server (misal: `htdocs` di XAMPP).
3. Buat database baru di phpMyAdmin dan import file `.sql`.
4. Sesuaikan konfigurasi pada:
   - `application/config/config.php` (atur `base_url`)
   - `application/config/database.php` (atur hostname, username, password, & database)
5. Akses melalui browser: `localhost/karir`
