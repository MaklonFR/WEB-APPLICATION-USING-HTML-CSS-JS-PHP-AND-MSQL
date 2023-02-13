<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idkelas  = $_POST['idKel'];
    $nkelas   = $_POST['nkelas'];
    $jur      = $_POST['jur'];
    $jsiswa   = $_POST['jsiswa'];

    $sql = "UPDATE tb_kelas SET 
            nama_kelas = '$nkelas',
            jurusan = '$jur',
            jumlah_siswa = '$jsiswa' WHERE id = $idkelas";

    if ($conn->query($sql)=== TRUE) {
    echo "Update Data kelas berhasil..!";
    } else {
    echo "Terjadi kesalahan : " . $conn->error;
    }
?>