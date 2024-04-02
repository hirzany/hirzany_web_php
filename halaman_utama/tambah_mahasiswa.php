<?php include 'header.php'; ?>

<h2>Tambah/Edit Mahasiswa</h2>

<form action="proses_tambah_mahasiswa.php" method="POST">
    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim"><br>
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <label for="tempat_lahir">Tempat Lahir:</label><br>
    <input type="text" id="tempat_lahir" name="tempat_lahir"><br>
    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>
    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat"></textarea><br><br>
    <input type="submit" value="Simpan">
</form>

