<?php
include '_Config/functions.php';

if(isset($_POST["submit"]) ) {

    if(tambahTingkatan($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tingkatan.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambahTingkatan.php';
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
    <title>Tambah Data</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Tambah Tingkatan</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <form action="" method="post">
        <ul>
            <li>
                <label for="tingkatan">Tingkatan : </label>
                <input type="text" name="tingkatan" id="tingkatan">
            </li>
            <br>
            <input type="submit" name="submit" value="Tambah">
        </ul>
    </form>
</body>
</html>