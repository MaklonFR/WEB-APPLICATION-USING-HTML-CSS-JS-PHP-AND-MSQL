<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idJur   = $_POST['idJur'];
    $njur    = $_POST['njur'];
    $jkelas  = $_POST['jkelas'];

    $sql = "UPDATE tb_jurusan SET nama_jurusan = '$njur',
    jumlah_kelas = '$jkelas' WHERE id = $idJur";

    if ($conn->query($sql)=== TRUE) {
    echo "Update Data jurusan berhasil..!";
    } else {
    echo "Terjadi kesalahan : " . $conn->error;
    }
?>