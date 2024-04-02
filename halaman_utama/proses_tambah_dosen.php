<?php 
include 'config.php';
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO dosen (nidn, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES ('$nidn', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat')";

if ($conn->query($sql) === TRUE) {
    header("Location: dosen.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
