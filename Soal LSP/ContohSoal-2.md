# 💻 UJI KOMPETENSI – PEMROGRAM JUNIOR (LSP MEDIA INFORMATIKA)

## 🌐 Proyek: SISTEM INFORMASI DATA SISWA (Platform Web)

### 🧩 Deskripsi Kasus
Sebuah sekolah menengah kejuruan ingin memiliki aplikasi web sederhana untuk mengelola **data siswa**.  
Aplikasi ini digunakan oleh **staf tata usaha** untuk menambah, mengedit, menghapus, dan mencari data siswa berdasarkan **NISN** atau **nama**.

Sebagai **Junior Web Programmer**, Anda diminta untuk membangun aplikasi tersebut menggunakan **PHP + MySQL** dengan struktur kode yang rapi, terstruktur, dan sesuai standar *best practice*.

---

## 🎯 Tujuan Proyek
Peserta mampu:
1. Menganalisis kebutuhan sistem berbasis web.
2. Menggunakan struktur data dan database untuk menyimpan informasi.
3. Menerapkan logika pemrograman terstruktur.
4. Melakukan debugging dan pengujian unit program.
5. Membuat dokumentasi kode program.

---

## 📚 Unit Kompetensi yang Diuji
| No | Kode Unit | Judul Unit |
|----|------------|-------------|
| 1 | J.620100.004.02 | Menggunakan Struktur Data |
| 2 | J.620100.009.01 | Menggunakan Spesifikasi Program |
| 3 | J.620100.010.02 | Menerapkan Perintah Eksekusi Bahasa Pemrograman |
| 4 | J.620100.016.01 | Menulis Kode Sesuai Guidelines dan Best Practices |
| 5 | J.620100.017.02 | Mengimplementasikan Pemrograman Terstruktur |
| 6 | J.620100.023.02 | Membuat Dokumen Kode Program |
| 7 | J.620100.025.02 | Melakukan Debugging |
| 8 | J.620100.033.02 | Melaksanakan Pengujian Unit Program |

---

## 🧱 Ketentuan Umum Proyek
1. Gunakan bahasa pemrograman **PHP (versi 7 ke atas)**.
2. Gunakan **MySQL / MariaDB** sebagai database.
3. Tampilan bebas menggunakan **TailwindCSS** atau **Bootstrap**.
4. Struktur folder harus rapi dan modular:
   ```
   app/
     controllers/
     models/
     views/
   public/
     css/
     js/
     index.php
   config/
     database.php
   ```
5. Gunakan komentar dan nama variabel yang jelas (`camelCase` atau `snake_case`).

---

## 🚀 Tugas yang Harus Dikerjakan

### 1. Analisis Kebutuhan Sistem  
(Unit: J.620100.009.01)
Tuliskan:
- Tujuan sistem  
- Fitur utama  
- Struktur tabel database (nama tabel, kolom, tipe data)  
- Diagram alur sederhana (input → proses → output)

---

### 2. Struktur Data  
(Unit: J.620100.004.02)
Gunakan **array** untuk menampilkan data siswa sementara di PHP sebelum disimpan ke database.  
Contoh:
```php
$siswa = [
  ["nisn" => "12345", "nama" => "Budi Santoso", "kelas" => "X RPL 1"],
  ["nisn" => "67890", "nama" => "Siti Aminah", "kelas" => "X RPL 2"]
];
```
Tampilkan data dalam tabel HTML, dengan fitur pencarian nama.

---

### 3. Modul Login & Dashboard  
(Unit: J.620100.010.02)
Buat halaman login:
- Input: username, password  
- Validasi data dari tabel `users` di database  
- Jika benar → tampilkan **Dashboard**  
- Jika salah → tampilkan pesan “Username atau Password salah!”

---

### 4. Penulisan Kode Sesuai Best Practice  
(Unit: J.620100.016.01)
Pastikan:
- Struktur folder rapi (`MVC pattern`)
- Komentar di setiap fungsi penting
- Tidak ada duplikasi kode
- Penamaan variabel dan fungsi konsisten

---

### 5. Fungsi Modular  
(Unit: J.620100.017.02)
Buat fungsi PHP:
```php
function hitungRataNilai($nilai) {
  return array_sum($nilai) / count($nilai);
}
```
Gunakan fungsi ini di halaman **detail siswa** untuk menampilkan rata-rata nilai.

---

### 6. Debugging  
(Unit: J.620100.025.02)
Perbaiki kode berikut agar dapat menampilkan nama siswa dengan benar:
```php
<?php
include 'koneksi.php';
$query = "SELEC * FROM siswa"; 
$result = mysqli_query($koneksi, $query);
while($row = $result){
  echo $row['nama'];
}
?>
```
Identifikasi minimal **3 kesalahan** dan tulis versi yang benar.

---

### 7. Pengujian Unit  
(Unit: J.620100.033.02)
Buat tabel rencana pengujian untuk fungsi `loginUser()`:

| No | Kasus Uji | Input | Hasil yang Diharapkan |
|----|------------|--------|----------------------|
| 1 | Login berhasil | admin / 123 | Redirect ke dashboard |
| 2 | Password salah | admin / 321 | Pesan error |
| 3 | Username kosong | (kosong) / 123 | Pesan validasi |

---

### 8. Dokumentasi  
(Unit: J.620100.023.02)
Buat file `README.md` berisi:
- Deskripsi singkat aplikasi  
- Langkah instalasi  
- Struktur folder  
- Screenshot hasil tampilan  
- Catatan atau kendala yang ditemukan  

---

## 📦 Output yang Diharapkan
- Aplikasi web yang bisa dijalankan lokal.
- Database MySQL (`db_siswa.sql`).
- File kode lengkap dalam struktur rapi.
- Dokumen `README.md` dan hasil debugging.

---

## 🧠 Kriteria Penilaian
| Aspek | Bobot | Keterangan |
|--------|--------|-------------|
| Ketepatan Fitur | 30% | Fungsi login, CRUD, dan pencarian berjalan |
| Struktur Kode | 20% | Menggunakan MVC dan best practice |
| Keamanan & Validasi | 15% | Input disanitasi, login aman |
| Debugging & Testing | 20% | Dapat menemukan dan memperbaiki error |
| Dokumentasi | 15% | README dan struktur dijelaskan dengan baik |

---

## 👨‍💻 Catatan
- Gunakan logika sederhana namun rapi dan efisien.  
- Hindari copy-paste tanpa memahami fungsi kode.  
- Setiap peserta wajib bisa menjelaskan logika programnya kepada asesor.

---

**Disusun untuk keperluan Uji Kompetensi Skema Pemrogram Junior – LSP Media Informatika**  
Versi: 1.0 • Platform: Web Application (PHP + MySQL)
