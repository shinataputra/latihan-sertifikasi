# Modul Praktik: Struktur Data & Library Pre-Existing (PHP)
Durasi: 5 jam pelajaran (5 pertemuan).  
Bahasa: PHP (minimal PHP 7.4).  
Tujuan: siswa memahami penggunaan struktur data dasar di PHP dan cara memanfaatkan library/komponen pre-existing (Composer).  
File ini berisi materi, latihan, dan contoh kode. Jalankan file PHP lewat CLI: `php src/nama_file.php`. Untuk latihan Composer: jalankan `composer install` di folder modul.

Struktur:
- 01_arrays.md        -> Pertemuan 1: Array dan Associative Array
- 02_spl_collections.md -> Pertemuan 2: SPL Collections (SplDoublyLinkedList, SplFixedArray)
- 03_stack_queue.md   -> Pertemuan 3: Buat Stack & Queue dengan OOP
- 04_composer_library.md -> Pertemuan 4: Menggunakan library pre-existing (fakerphp/faker)
- 05_project.md       -> Pertemuan 5: Mini project - Student Grades Manager
- src/                -> Kode contoh dan solusi
- composer.json       -> definisi package (faker)
- LICENSE, .gitignore

Instruksi singkat:
1. Ekstrak zip atau clone repo.
2. Jika ingin menjalankan contoh Faker: `composer install` lalu `php src/faker_demo.php`.
3. Untuk mini app, jalankan `php -S localhost:8080 -t src` lalu buka `http://localhost:8080/app.php`.
