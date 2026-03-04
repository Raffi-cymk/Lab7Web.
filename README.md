# Lab7Web.
## 📘 LAPORAN PRAKTIKUM
PHP Framework – CodeIgniter 3

---

### 📌 Tujuan Praktikum
Praktikum ini bertujuan untuk:
1. Memahami konsep dasar Framework.

2. Memahami arsitektur MVC (Model, View, Controller).
3. Mampu membuat halaman web sederhana menggunakan CodeIgniter 3.

4. Memahami cara kerja routing dan pengaturan URL.

**📖 Konsep Dasar MVC**
CodeIgniter menggunakan konsep MVC:
* Model → Mengelola data (database atau sumber lain).

* View → Mengatur tampilan (HTML).

* Controller → Mengatur logika dan menghubungkan Model dengan View.

Alur kerjanya:
Browser → index.php → Controller → View → Ditampilkan ke Browser 

---

## 📂 Struktur Folder Project

Struktur utama project setelah instalasi:
ci3/
│
├── application/
│   ├── config/
│   ├── controllers/
│   │   ├── Welcome.php
│   │   └── About.php
│   ├── models/
│   └── views/
│       ├── welcome_message.php
│       ├── about.php
│       └── template/
│           ├── header.php
│           └── footer.php
│
├── system/
├── user_guide/
├── index.php
└── .htaccess

Folder application merupakan area utama pengembangan aplikasi.

---

## 📷 Dokumentasi Pengerjaan

**Screenshot 89**
Menampilkan halaman default CodeIgniter 3 setelah instalasi berhasil. Hal ini menunjukkan bahwa konfigurasi project dan server sudah berjalan dengan baik.

**Screenshot 90**
Menampilkan akses halaman melalui URL menggunakan controller bawaan (Welcome). Halaman berhasil diakses melalui browser tanpa error.

**Screenshot 91**
Pembuatan controller baru About.php di dalam folder:
application/controllers
