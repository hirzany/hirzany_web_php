<?php 
include 'config.php';

$id = $_POST['id'];
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$sql = "UPDATE dosen SET nidn='$nidn', nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: dosen.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
