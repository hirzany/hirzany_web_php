

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Registrasi</title>
    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            var y = document.getElementById("confirm_password");
            if (x.type === "password" && y.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>
</head>
<body>
    <form action="proses_registrasi.php" method="post">
        <h2>Registrasi</h2>
        <label for="username">Username / NIM:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <input type="checkbox" onclick="togglePassword()"> Tampilkan password<br><br>
        <input type="submit" value="Registrasi">
        <div ">Back to <a href="login.php">Login</a></div>
    </form>
</body>
</html>
