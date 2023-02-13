<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $nkelas   = $_POST['nkelas'];
    $jur      = $_POST['jur'];
    $jsiswa   = $_POST['jsiswa'];

    $sql = "INSERT INTO tb_kelas (
            nama_kelas,
            jurusan, 
            jumlah_siswa 
            )
    VALUES (
            '$nkelas', 
            '$jur',
            '$jsiswa'
            )";
    if ($conn->query($sql) === TRUE) {
        echo "Data kelas berhasil disimpan..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>