<?php 
include 'header.php'; 
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<h2>Edit Mahasiswa</h2>

<form action="proses_edit_mahasiswa.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>"><br>
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="L" <?php if($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
        <option value="P" <?php if($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
    </select><br>
    <label for="tempat_lahir">Tempat Lahir:</label><br>
    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>"><br>
    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>"><br>
    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat"><?php echo $row['alamat']; ?></textarea><br><br>
    <input type="submit" value="Simpan">
</form>
<?php 
} else {
    echo "Data tidak ditemukan";
}
$conn->close();
?>
