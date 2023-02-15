<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idsiswa     = $_POST['idSiswa'];
    $nama_siswa  = $_POST['nama_Siswa'];
    $nisn        = $_POST['nisn'];
    $nis         = $_POST['nis'];
    $jk_siswa    = $_POST['jk_Siswa'];
    $kelas       = $_POST['kelas'];
    $jurusan     = $_POST['jurusan'];
    $alamat_siswa= $_POST['alamat_Siswa'];

    $sql = "UPDATE tb_siswa SET 
            nama_siswa  = '$nama_siswa',
            nisn        = '$nisn',
            nis         = '$nis',
            jk          = '$jk_siswa',
            kelas       = '$kelas',
            jurusan     = '$jurusan',
            alamat      = '$alamat_siswa' 
            WHERE id = $idsiswa";

    if ($conn->query($sql)=== TRUE) {
    echo "Update Data siswa berhasil..!";
    } else {
    echo "Terjadi kesalahan : " . $conn->error;
    }
?>