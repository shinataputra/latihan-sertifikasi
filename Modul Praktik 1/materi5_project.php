<?php
// Pertemuan 5: Mini Project Daftar Siswa
$file = "siswa.json";

// baca data lama
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// tambah siswa baru
$data[] = ["nama" => "SiswaBaru", "umur" => 17];

// simpan
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// tampilkan
echo "Daftar Siswa:\n";
foreach ($data as $s) {
    echo "- {$s['nama']} (Umur {$s['umur']})\n";
}
