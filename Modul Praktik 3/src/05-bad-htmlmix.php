<?php
$conn = new mysqli("localhost", "root", "", "dbsekolah");
$result = $conn->query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<body>
<h1>Data Siswa</h1>
<?php while($row = $result->fetch_assoc()): ?>
    <p><?php echo $row['nama']; ?> - <?php echo $row['kelas']; ?></p>
<?php endwhile; ?>
</body>
</html>
