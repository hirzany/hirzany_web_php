<?php 
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM dosen WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: dosen.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
