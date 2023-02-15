<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idsiswa   = $_POST['idSiswa'];
    $sql = "DELETE FROM tb_siswa WHERE id = $idsiswa";
    if ($conn->query($sql) === TRUE) {
        echo "Data siswa berhasil dihapus..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>