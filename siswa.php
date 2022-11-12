<?php
include '_Config/functions.php';

$dataSiswa = "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_cal = kelas.id_cal";
$query = mysqli_query($conn, $dataSiswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h1>Siswa SMKN 11 Denpasar</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <a href="tambahSiswa.php">Tambah Siswa</a><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Kelola</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($data = mysqli_fetch_array($query) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nis"]; ?></td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td>
                <a href="editSiswa.php?id_sis=<?= $data["id_sis"]; ?>" onclick="return confirm('Yakin mau diubah?')">Edit</a> | 
                <a href="hapusSiswa.php?id_sis=<?= $data["id_sis"]; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>