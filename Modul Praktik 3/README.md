# 🧑‍💻 Modul Praktik: Menulis Kode PHP dengan Guidelines & Best Practices

Modul ini dirancang untuk membantu kamu lolos unit *"Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices"* pada sertifikasi LSP.  
Tujuan utamanya adalah membiasakan kamu menulis kode **rapi, aman, mudah dibaca, dan sesuai standar industri**.

---

## 🎯 Tujuan Pembelajaran
1. Menggunakan **penamaan variabel & fungsi** yang jelas dan konsisten.
2. Menghindari **duplikasi kode** dengan prinsip DRY (*Don't Repeat Yourself*).
3. Menerapkan **keamanan dasar** dalam PHP (validasi input, hindari SQL injection).
4. Menyusun kode dengan **struktur yang rapi & modular**.
5. Memisahkan **logika bisnis dan tampilan** (prinsip MVC sederhana).

---

## 📝 Petunjuk Praktik
- Buka folder `src/`.
- Lihat file `bad_*.php` → pahami kesalahan kode.
- Lihat file `good_*.php` → pahami cara perbaikannya.
- Coba refactor file "bad" menjadi lebih baik sesuai guidelines.
- Kerjakan tugas di bawah ini.

---

## 🛠️ Praktik 1 – Penamaan Variabel
**Bad code:** Variabel tidak jelas (`$a, $b, $c`).  
**Good code:** Variabel deskriptif (`$studentName, $studentAge`).

---

## 🛠️ Praktik 2 – Hindari Duplikasi (DRY Principle)
**Bad code:** Kode copy-paste untuk hitung nilai.  
**Good code:** Buat fungsi reusable.

---

## 🛠️ Praktik 3 – Keamanan Input
**Bad code:** Query SQL langsung dari `$_GET`.  
**Good code:** Gunakan `prepare` & `bindParam`.

---

## 🛠️ Praktik 4 – Struktur Kode
**Bad code:** Semua logika dicampur di 1 file.  
**Good code:** Pisahkan menjadi fungsi/helper.

---

## 🛠️ Praktik 5 – Pisahkan Logika & Tampilan
**Bad code:** HTML campur PHP secara brutal.  
**Good code:** Pisahkan `controller.php`, `view.php`.

---

## 🎓 Tugas Mandiri
1. Buat program sederhana **CRUD data siswa** dengan prinsip berikut:
   - Penamaan konsisten.
   - Struktur folder rapi (`model/`, `view/`, `controller/`).
   - Gunakan **prepared statement** untuk query.
   - Jangan ada duplikasi kode.
2. Refactor lagi kode temanmu (peer review).

---

## ✅ Penilaian (Rubrik LSP)
- [ ] Kode rapi, konsisten, sesuai guidelines.
- [ ] Tidak ada duplikasi kode.
- [ ] Aman dari input berbahaya.
- [ ] Struktur modular & mudah dipelihara.
- [ ] Pisahkan logika & tampilan.

---

## 📌 Catatan
*Ingat, sertifikasi LSP tidak menilai seberapa cepat kode kamu jalan, tapi seberapa profesional kode kamu ditulis.*  
