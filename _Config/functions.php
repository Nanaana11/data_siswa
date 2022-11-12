<?php
//koneksi
$conn = mysqli_connect("localhost", "root", "", "sekolah2");

if(mysqli_connect_error()) {
    echo "Tidak bisa terkoneksi : ".mysqli_error();
}

// pengaturan base_url
function base_url($url = null) {
    $base_url = "http://localhost/sekolah2";
    if($url != null) {
        return $base_url."/".$url; 
    } else {
        return $base_url;
    }
}

// pengaturan query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahJurusan($data) {
    global $conn;
    $jurusan = htmlspecialchars($data["jurusan"]);
    $penjelasan = htmlspecialchars($data["penjelasan"]);
    $query = "INSERT INTO jurusan 
                VALUES
               ('', '$jurusan', '$penjelasan')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editJurusan($data) {
    global $conn;
    $id_ju = $data["id_ju"];
    $jurusan = htmlspecialchars($data["jurusan"]);
    $penjelasan = htmlspecialchars($data["penjelasan"]);

    $query = "UPDATE jurusan SET 
                jurusan = '$jurusan',
                penjelasan = '$penjelasan'
                WHERE id_ju = $id_ju
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahTingkatan($data) {
    global $conn;
    $tingkatan = htmlspecialchars($data["tingkatan"]);
    $query = "INSERT INTO tingkatan 
                VALUES
               ('', '$tingkatan')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editTingkatan($data) {
    global $conn;
    $id_ti = $data["id_ti"];
    $tingkatan = htmlspecialchars($data["tingkatan"]);

    $query = "UPDATE tingkatan SET 
                tingkatan = '$tingkatan'
                WHERE id_ti = $id_ti
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahKelas($data){ 
    global $conn;
    $jurusan = htmlspecialchars($data["jurusan"]);
    $tingkatan = htmlspecialchars($data["tingkatan"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $query = "INSERT INTO kelas (id_cal, id_ju, id_ti, kelas) VALUES ('', '$jurusan', '$tingkatan', '$kelas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahSiswa($data) {
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $query = "INSERT INTO siswa (id_sis, nis, nama, id_cal) VALUES ('', '$nis', '$nama', '$kelas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusJurusan($id_ju) {
    global $conn;
    mysqli_query($conn, "DELETE FROM jurusan WHERE id_ju = $id_ju");

    return mysqli_affected_rows($conn);
}
function hapusTingkatan($id_ti) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tingkatan WHERE id_ti = $id_ti");

    return mysqli_affected_rows($conn);
}

function hapusKelas($id_cal) {
    global $conn;
    mysqli_query($conn, "DELETE FROM kelas WHERE id_cal = $id_cal");

    return mysqli_affected_rows($conn);
}

function hapusSiswa($id_sis) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id_sis = $id_sis");

    return mysqli_affected_rows($conn);
}

function editKelas($data) {
    global $conn;
    $id_cal = $data["id_cal"];
    $jurusan = htmlspecialchars($data["jurusan"]);
    $tingkatan = htmlspecialchars($data["tingkatan"]);
    $kelas = htmlspecialchars($data["kelas"]);

    $query = "UPDATE kelas SET 
                id_ju = '$jurusan',
                id_ti = '$tingkatan',
                kelas = '$kelas'
                WHERE id_cal = $id_cal
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editSiswa($data) {
    global $conn;
    $id_sis = $data["id_sis"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);

    $query = "UPDATE siswa SET 
                nis = '$nis',
                nama = '$nama',
                id_cal = '$kelas'
                WHERE id_sis = $id_sis
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>