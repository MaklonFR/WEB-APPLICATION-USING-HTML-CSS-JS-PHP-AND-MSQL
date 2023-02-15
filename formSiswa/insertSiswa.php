<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)

    $nama_siswa  = $_POST['nama_Siswa'];
    $nisn        = $_POST['nisn'];
    $nis         = $_POST['nis'];
    $jk_siswa    = $_POST['jk_Siswa'];
    $kelas       = $_POST['kelas'];
    $jurusan     = $_POST['jurusan'];
    $alamat_siswa= $_POST['alamat_Siswa'];

    $sql = "INSERT INTO tb_siswa (
            nama_siswa,
            nisn,
            nis,
            jk, 
            kelas,
            jurusan,
            alamat 
            )
    VALUES (
            '$nama_siswa', 
            '$nisn',
            '$nis',
            '$jk_siswa',
            '$kelas',
            '$jurusan',
            '$alamat_siswa'
            )";
    if ($conn->query($sql) === TRUE) {
        echo "Data siswa berhasil disimpan..!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>