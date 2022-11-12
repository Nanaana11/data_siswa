<?php
include '_Config/functions.php';

$id_sis = $_GET["id_sis"];

if(hapusSiswa($id_sis) > 0 ) {
    echo "<script>
                alert('Data telah dihapus!');
                document.location.href = 'siswa.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'siswa.php';
        </script>";
    }

?>