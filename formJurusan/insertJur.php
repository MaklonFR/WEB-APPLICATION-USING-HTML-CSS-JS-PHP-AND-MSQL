<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $njur   = $_POST['njur'];
    $jkelas = $_POST['jkelas'];
    $sql = "INSERT INTO tb_jurusan (
            nama_jurusan, 
            jumlah_kelas 
            )
    VALUES (
            '$njur', 
            '$jkelas'
            )";
    if ($conn->query($sql) === TRUE) {
        echo "Data jurusan berhasil disimpan..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>