<?php
// controller.php
require 'model.php';
$siswa = getAllSiswa();
require 'view.php';

// model.php
function getAllSiswa() {
    $conn = new mysqli("localhost", "root", "", "dbsekolah");
    $result = $conn->query("SELECT * FROM siswa");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// view.php
?><!DOCTYPE html>
<html>
<body>
<h1>Data Siswa</h1>
<?php foreach($siswa as $row): ?>
    <p><?php echo htmlspecialchars($row['nama']); ?> - <?php echo htmlspecialchars($row['kelas']); ?></p>
<?php endforeach; ?>
</body>
</html>
