<?php
include '_Config/functions.php';

if(isset($_POST["submit"]) ) {

    if(tambahSiswa($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'siswa.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambahSiswa.php';
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
    <h1>Tambah Siswa</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <select name="kelas" id="kelas">
                    <option value="">- Pilih -</option>
                    <?php
                        $sql_kelas = mysqli_query($conn, "SELECT * FROM kelas") or die (mysqli_error($conn));
                        while($data = mysqli_fetch_array($sql_kelas) ) {
                            echo '<option value="'.$data['id_cal'].'">'.$data['kelas'].'</option>';
                        }
                    ?> 
                </select>
            </li>
            <br>
            <input type="submit" name="submit" value="Tambah">
        </ul>
    </form>
</body>
</html>