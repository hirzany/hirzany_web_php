<?php 
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: mahasiswa.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
