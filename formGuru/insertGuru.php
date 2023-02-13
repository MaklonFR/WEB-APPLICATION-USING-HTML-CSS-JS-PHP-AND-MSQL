<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $nama_guru  = $_POST['nama_guru'];
    $nip        = $_POST['nip'];
    $jk_guru    = $_POST['jk_guru'];
    $mapel      = $_POST['mapel'];
    $alamat_guru= $_POST['alamat_guru'];

    $sql = "INSERT INTO tb_guru (
            nama_guru,
            nip,
            jk, 
            mapel,
            alamat 
            )
    VALUES (
            '$nama_guru', 
            '$nip',
            '$jk_guru',
            '$mapel',
            '$alamat_guru'
            )";
    if ($conn->query($sql) === TRUE) {
        echo "Data guru berhasil disimpan..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>