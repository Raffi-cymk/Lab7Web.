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
<img width="1366" height="551" alt="Screenshot (89)" src="https://github.com/user-attachments/assets/33ec9fb2-777e-49b1-9132-664a1fa756c2" />


**Screenshot 90**

Menampilkan akses halaman melalui URL menggunakan controller bawaan (Welcome). Halaman berhasil diakses melalui browser tanpa error.
<img width="555" height="185" alt="Screenshot (90)" src="https://github.com/user-attachments/assets/b0f77c5c-3857-47f3-b5ff-912bf7d42248" />


**Screenshot 91**

Pembuatan controller baru About.php di dalam folder:
application/controllers

Controller ini digunakan untuk membuat halaman baru selain halaman default.
<img width="505" height="218" alt="Screenshot (91)" src="https://github.com/user-attachments/assets/cfe6a110-6c34-4ffb-ae60-f3211e50f529" />


**Screenshot 92**

Menambahkan method index() pada controller About untuk menampilkan halaman About.

Halaman diakses melalui:
http://localhost/lab11_ci/ci3/index.php/about
<img width="493" height="267" alt="Screenshot (92)" src="https://github.com/user-attachments/assets/ae5a2bc4-bd2b-4d75-8d46-65559710de42" />


**Screenshot 93**

Pembuatan file view about.php di dalam folder:
application/views

View ini berisi tampilan halaman yang akan ditampilkan ke browser.
<img width="535" height="229" alt="Screenshot (93)" src="https://github.com/user-attachments/assets/d3cca4ce-2f94-4f7c-a58a-6116b8c586d4" />


**Screenshot 94**

Menghubungkan controller dan view menggunakan:
PHP
$this->load->view('about');

Tahap ini menunjukkan implementasi dasar konsep MVC.
<img width="457" height="260" alt="Screenshot (94)" src="https://github.com/user-attachments/assets/23540b8e-c8c7-4015-8be8-5586db954fa9" />


**Screenshot 95**

Pengiriman data dari controller ke view menggunakan array $data.

Contoh:
$data['title'] = 'Halaman About';
$data['content'] = 'Isi halaman dikirim dari controller.';

Data kemudian ditampilkan di dalam view.
<img width="511" height="395" alt="Screenshot (95)" src="https://github.com/user-attachments/assets/1de17b6f-041c-4612-9183-ac54aaa79696" />


**Screenshot 96**

Pembuatan layout template dengan memisahkan:

* header.php
* footer.php

Template ini digunakan agar semua halaman memiliki struktur tampilan yang sama.
<img width="575" height="340" alt="Screenshot (96)" src="https://github.com/user-attachments/assets/72f90dca-4fb4-41e6-9580-c8eb16ba3e50" />


**Screenshot 97**

Tampilan akhir project setelah semua halaman berhasil dibuat:

* Halaman About
* Halaman Contact
* Halaman FAQ

Semua halaman menggunakan layout yang sama dan dapat diakses tanpa index.php di URL.
<img width="591" height="375" alt="Screenshot (97)" src="https://github.com/user-attachments/assets/0d4be646-26b9-47e5-86bf-53ad07fc6777" />


---

## 🔧 Konfigurasi Tambahan

Penghilangan index.php dilakukan dengan:

* Mengatur file .htaccess
* Mengubah konfigurasi:
$config['index_page'] = '';

Hal ini membuat URL menjadi lebih bersih.

## ✅ Kesimpulan

Praktikum ini berhasil diselesaikan dengan baik. Aplikasi sederhana berbasis CodeIgniter 3 telah dibuat dengan menerapkan konsep MVC, routing, dan layout template.
Semua halaman dapat diakses dengan normal tanpa error dan struktur project sudah sesuai dengan standar framework.
