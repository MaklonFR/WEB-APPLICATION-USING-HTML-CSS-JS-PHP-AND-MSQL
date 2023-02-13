<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idJur   = $_POST['idJur'];
    $sql = "DELETE FROM tb_jurusan WHERE id = $idJur";
    if ($conn->query($sql) === TRUE) {
        echo "Data jurusan berhasil dihapus..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>