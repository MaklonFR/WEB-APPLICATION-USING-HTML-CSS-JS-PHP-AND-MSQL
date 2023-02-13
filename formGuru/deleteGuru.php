<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idguru   = $_POST['idGuru'];
    $sql = "DELETE FROM tb_guru WHERE id = $idguru";
    if ($conn->query($sql) === TRUE) {
        echo "Data guru berhasil dihapus..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>