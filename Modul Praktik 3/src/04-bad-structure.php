<?php
// Semua logika dicampur
$conn = new mysqli("localhost", "root", "", "dbsekolah");
$result = $conn->query("SELECT * FROM siswa");
while($row = $result->fetch_assoc()) {
    echo "<p>" . $row['nama'] . " - " . $row['kelas'] . "</p>";
}
