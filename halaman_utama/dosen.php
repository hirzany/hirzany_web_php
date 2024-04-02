<?php 
include 'header.php'; 
include 'config.php';

$sql = "SELECT * FROM dosen";
$result = $conn->query($sql);
?>

<h2>Data Dosen</h2>
<a href="tambah_dosen.php">Tambah Dosen</a>
<table>
    <tr>
        <th>NIDN</th>
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
            echo "<td>".$row["nidn"]."</td>";
            echo "<td>".$row["nama"]."</td>";
            echo "<td>".$row["jenis_kelamin"]."</td>";
            echo "<td>".$row["tempat_lahir"]."</td>";
            echo "<td>".$row["tanggal_lahir"]."</td>";
            echo "<td>".$row["alamat"]."</td>";
            echo "<td><a href='edit_dosen.php?id=".$row["id"]."'>Edit</a> | <a href='hapus_dosen.php?id=".$row["id"]."'>Hapus</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
    }
    ?>
</table>

