<?php
$conn = new mysqli("localhost", "root", "", "dbsekolah");
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM siswa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
echo htmlspecialchars($data['nama']);
