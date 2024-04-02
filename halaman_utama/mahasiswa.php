<?php 
include 'header.php'; 
include 'config.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<h2>Data Mahasiswa</h2>
<a href="tambah_mahasiswa.php">Tambah Mahasiswa</a>
<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["nim"]."</td>";
            echo "<td>".$row["nama"]."</td>";
            echo "<td>".$row["jenis_kelamin"]."</td>";
            echo "<td>".$row["tempat_lahir"]."</td>";
            echo "<td>".$row["tanggal_lahir"]."</td>";
            echo "<td>".$row["alamat"]."</td>";
            echo "<td><a href='edit_mahasiswa.php?id=".$row["id"]."'>Edit</a> | <a href='hapus_mahasiswa.php?id=".$row["id"]."'>Hapus</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
    }
    ?>
</table>

