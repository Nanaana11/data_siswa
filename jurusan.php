<?php
include '_Config/functions.php';

$dataJurusan = "SELECT * FROM jurusan";
$query = mysqli_query($conn, $dataJurusan);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jurusan</title>
</head>
<body>
    <h1>Daftar Jurusan SMKN 11 Denpasar</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <a href="tambahJurusan.php">Tambah Jurusan</a><br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Jurusan</th>
            <th>Keterangan</th>
            <th>Kelola</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($data = mysqli_fetch_array($query) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["jurusan"]; ?></td>
            <td><?= $data["penjelasan"]; ?></td>
            <td>
                <a href="editJurusan.php?id_ju=<?= $data["id_ju"]; ?>" onclick="return confirm('Yakin mau diubah?')">Edit</a> | 
                <a href="hapusJurusan.php?id_ju=<?= $data["id_ju"]; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>