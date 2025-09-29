<?php
$conn = new mysqli("localhost", "root", "", "dbsekolah");
$id = $_GET['id']; // raw input
$result = $conn->query("SELECT * FROM siswa WHERE id = $id");
$data = $result->fetch_assoc();
echo $data['nama'];
