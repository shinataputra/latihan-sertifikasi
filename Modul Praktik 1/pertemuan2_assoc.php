<?php
// Pertemuan 2: Associative Array
$siswa = [
    ["nama" => "Andi", "umur" => 17, "kelas" => "X RPL 1"],
    ["nama" => "Budi", "umur" => 16, "kelas" => "X RPL 2"],
];

echo "Daftar Siswa:\n";
foreach ($siswa as $s) {
    echo "{$s['nama']} - Umur: {$s['umur']} - Kelas: {$s['kelas']}\n";
}
