<?php
function getAllSiswa($conn) {
    $result = $conn->query("SELECT * FROM siswa");
    return $result->fetch_all(MYSQLI_ASSOC);
}

$conn = new mysqli("localhost", "root", "", "dbsekolah");
$siswa = getAllSiswa($conn);
foreach ($siswa as $row) {
    echo "<p>" . htmlspecialchars($row['nama']) . " - " . htmlspecialchars($row['kelas']) . "</p>";
}
