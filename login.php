

<?php
session_start();
include 'halaman_utama/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: halaman_utama/index.php");
            exit;
        } else {
            echo "Maaf, username/nim dan password salah";
        }
    } else {
        echo "Maaf, username/nim dan password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="username">Username / NIM:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" onclick="togglePassword()"> Tampilkan password<br><br>
        <input type="submit" value="Login">
        <div >Anda belum punya akun? <a href="registrasi.php">Registrasi</a></div>
    </form>
    <script>
function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>
</html>
