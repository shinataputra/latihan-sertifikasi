<?php
// arrays_demo.php - contoh penggunaan array dan associative array
$siswa = [
    ['nama' => 'Andi', 'usia' => 17, 'kelas' => 'X RPL 1'],
    ['nama' => 'Budi', 'usia' => 16, 'kelas' => 'X RPL 2'],
    ['nama' => 'Citra', 'usia' => 18, 'kelas' => 'XI RPL 1'],
    ['nama' => 'Dewi', 'usia' => 17, 'kelas' => 'XI RPL 2'],
];

$filtered = array_filter($siswa, function($s){ return $s['usia'] > 16; });
$names = array_map(function($s){ return $s['nama']; }, $siswa);
$average = array_reduce($siswa, function($carry, $s){
    return $carry + $s['usia'];
}, 0) / count($siswa);

echo "Siswa (semua):\n";
foreach($siswa as $s) echo " - {$s['nama']}, usia {$s['usia']}, kelas {$s['kelas']}\n";

echo "\nSiswa usia > 16:\n";
foreach($filtered as $s) echo " - {$s['nama']} ({$s['usia']})\n";

echo "\nDaftar nama: ".implode(', ', $names)."\n";
echo "Rata-rata usia: " . number_format($average,2) ."\n";

// fungsi pencarian partial name
function search_by_name($arr, $term){
    $term = mb_strtolower($term);
    return array_filter($arr, function($s) use ($term){
        return mb_strpos(mb_strtolower($s['nama']), $term) !== false;
    });
}

echo "\nHasil pencarian 'di':\n";
$found = search_by_name($siswa, 'di');
foreach($found as $f) echo " - {$f['nama']}\n";
