<?php
include '_Config/functions.php';

$id_ju = $_GET["id_ju"];

$ju = query("SELECT * FROM jurusan WHERE id_ju = $id_ju")[0];

if(isset($_POST["submit"]) ) {

    if(editJurusan($_POST) > 0 ) {
        echo "<script>
                alert('Data telah diedit!');
                document.location.href = 'jurusan.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal diedit!');
                document.location.href = 'editJurusan.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Edit Jurusan</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <form action="" method="post">
    <input type="hidden" name="id_ju" value="<?= $ju["id_ju"]; ?>">
        <ul>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $ju["jurusan"];?>">
            </li>
            <li>
                <label for="penjelasan">Keterangan : </label>
                <input type="text" name="penjelasan" id="penjelasan" required value="<?= $ju["penjelasan"];?>">
            </li>
            <br>
            <input type="submit" name="submit" value="Edit">
        </ul>
    </form>
</body>
</html>