<?php
include '_Config/functions.php';

if(isset($_POST["submit"]) ) {

    if(tambahKelas($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'tambahKelas.php';
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
    <h1>Tambah Kelas</h1>
    <hr>
    <a href="<?=base_url('jurusan.php')?>">Jurusan</a> | 
    <a href="<?=base_url('tingkatan.php')?>">Tingkatan</a> | 
    <a href="<?=base_url('kelas.php')?>">Kelas</a> | 
    <a href="<?=base_url('siswa.php')?>">Siswa</a>
    <hr>
    <form action="" method="post">
        <ul>
            <li>
                <label for="jurusan">Jurusan : </label>
                <select name="jurusan" id="jurusan">
                    <option value="">- Pilih -</option>
                    <?php
                        $sql_jurusan = mysqli_query($conn, "SELECT * FROM jurusan") or die (mysqli_error($conn));
                        while($data = mysqli_fetch_array($sql_jurusan) ) {
                            echo '<option value="'.$data['id_ju'].'">'.$data['jurusan'].'</option>';
                        }
                    ?> 
                </select>
            </li>
            <li>
                <label for="tingkatan">Tingkatan : </label>
                <select name="tingkatan" id="tingkatan">
                    <option value="">- Pilih -</option>
                    <?php
                        $sql_tingkatan = mysqli_query($conn, "SELECT * FROM tingkatan") or die (mysqli_error($conn));
                        while($data = mysqli_fetch_array($sql_tingkatan) ) {
                            echo '<option value="'.$data['id_ti'].'">'.$data['tingkatan'].'</option>';
                        }
                    ?> 
                </select>
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas">
            </li>
            <br>
            <input type="submit" name="submit" value="Tambah">
        </ul>
    </form>
</body>
</html>