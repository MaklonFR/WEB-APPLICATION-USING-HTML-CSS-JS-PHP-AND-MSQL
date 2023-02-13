<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idkelas   = $_POST['idKelas'];
    $sql = "DELETE FROM tb_kelas WHERE id = $idkelas";
    if ($conn->query($sql) === TRUE) {
        echo "Data kelas berhasil dihapus..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>