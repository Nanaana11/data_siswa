<?php
include '_Config/functions.php';

$dataKelas = "SELECT * FROM kelas INNER JOIN jurusan ON kelas.id_ju = jurusan.id_ju";
$dataKelas = "SELECT * FROM kelas INNER JOIN tingkatan ON kelas.id_ti = tingkatan.id_ti";
$query = mysqli_query($conn, $dataKelas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
</head>
<body>
    <h1>Daftar Kelas SMKN 11 Denpasar</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <a href="tambahKelas.php">Tambah Kelas</a><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Kelas</th>
            <th>Kelola</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($data = mysqli_fetch_array($query) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td>
                <a href="editKelas.php?id_cal=<?= $data["id_cal"]; ?>" onclick="return confirm('Yakin mau diubah?')">Edit</a> | 
                <a href="hapusKelas.php?id_cal=<?= $data["id_cal"]; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>