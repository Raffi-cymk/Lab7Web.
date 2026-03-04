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


## 📖 Konsep Dasar MVC

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

Controller ini digunakan untuk membuat halaman baru selain halaman default.

**Screenshot 92**
Menambahkan method index() pada controller About untuk menampilkan halaman About.

Halaman diakses melalui:
http://localhost/lab11_ci/ci3/index.php/about

**Screenshot 93**
Pembuatan file view about.php di dalam folder:
application/views

View ini berisi tampilan halaman yang akan ditampilkan ke browser.

**Screenshot 94**
Menghubungkan controller dan view menggunakan:
PHP
$this->load->view('about');

Tahap ini menunjukkan implementasi dasar konsep MVC.

**Screenshot 95**
Pengiriman data dari controller ke view menggunakan array $data.
Contoh:
$data['title'] = 'Halaman About';
$data['content'] = 'Isi halaman dikirim dari controller.';

Data kemudian ditampilkan di dalam view.

**Screenshot 96**
Pembuatan layout template dengan memisahkan:
* header.php
* footer.php

Template ini digunakan agar semua halaman memiliki struktur tampilan yang sama.
