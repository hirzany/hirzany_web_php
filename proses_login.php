<?php
include 'halaman_utama/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            header("Location: beranda.php");
            exit;
        } else {
            echo "Maaf, username/nim dan password salah.";
        }
    } else {
        echo "Maaf, username/nim dan password salah.";
    }
}

$conn->close();
?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin123') {
    header("Location: halaman_utama/header.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>
