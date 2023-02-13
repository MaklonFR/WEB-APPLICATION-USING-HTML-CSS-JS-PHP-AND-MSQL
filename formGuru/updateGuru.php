<?php
    //print_r($_POST);
    include "../koneksi.php";//panggil file koneksi database (koneksi.php)
    $idguru         = $_POST['idGuru'];
    $nama_guru      = $_POST['nama_guru'];
    $nip            = $_POST['nip'];
    $jk_guru        = $_POST['jk_guru'];
    $mapel          = $_POST['mapel'];
    $alamat_guru    = $_POST['alamat_guru'];

    $sql = "UPDATE tb_guru SET 
            nama_guru   = '$nama_guru',
            nip         = '$nip',
            jk          = '$jk_guru',
            mapel       = '$mapel',
            alamat      = '$alamat_guru' 
            WHERE id = $idguru";

    if ($conn->query($sql)=== TRUE) {
    echo "Update Data guru berhasil..!";
    } else {
    echo "Terjadi kesalahan : " . $conn->error;
    }
?>