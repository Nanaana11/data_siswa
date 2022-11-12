<?php
include '_Config/functions.php';

$id_cal = $_GET["id_cal"];

if(hapusKelas($id_cal) > 0 ) {
    echo "<script>
                alert('Data telah dihapus!');
                document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'kelas.php';
        </script>";
    }

?>