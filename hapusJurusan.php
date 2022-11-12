<?php
include '_Config/functions.php';

$id_ju = $_GET["id_ju"];

if(hapusJurusan($id_ju) > 0 ) {
    echo "<script>
                alert('Data telah dihapus!');
                document.location.href = 'jurusan.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'jurusan.php';
        </script>";
    }

?>