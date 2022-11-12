<?php
include '_Config/functions.php';

$id_ti = $_GET["id_ti"];

if(hapusTingkatan($id_ti) > 0 ) {
    echo "<script>
                alert('Data telah dihapus!');
                document.location.href = 'tingkatan.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'tingkatan.php';
        </script>";
    }

?>