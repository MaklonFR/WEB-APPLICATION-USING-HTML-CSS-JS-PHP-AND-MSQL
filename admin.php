<?php
 include 'login/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SMKN 1 Kuwus</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Bagian Header (Kepala) -->
    <header>
        <h2>HALAMAN ADMIN</h2>
    </header>
    <!-- Bagian Navigation (Menu) -->
    <div>
            <button class="button" id="cekHome" >Home</button>
            <button class="button" id="cekJur" >Data Jurusan</button>
            <button class="button" id="cekKelas" >Data Kelas</button>
            <button class="button" id="cekGuru" >Data Guru</button>
            <button class="button" id="cekSiswa" >Data Siswa</button>
            <button style ="background-color:red;" class="button" id="logOut" >Logout</button>
    </div>

    <!-- Bagian Tampilkan isi -->
    <div class="bt" id="tampil_hasil">
         <h3 id="judul">Hallo, <?php echo $row["nama"]; ?>! <br>Selamat datang di halaman admin SMKN 1 Kuwus</h3> 
         <button 
          style='font-size: 14px; background-color:steelblue;' 
          class="button" 
          id='cekDatabase' >
          Cek Database
        </button>
    </div>

<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/showData.js"></script>
<script>
  $("#cekHome").click(function(){
    window.location.href = "admin.php";
  });

  $("#cekSiswa").click(function(){
    tampilSiswa();
  });

  $("#cekGuru").click(function(){
    tampilGuru();
  });

  $("#cekJur").click(function(){
    tampilJurusan();
  });

  $("#cekKelas").click(function(){
    tampilKelas();
  });

  $("#logOut").click(function(){
    window.location.href = "logout.php";
  });

</script>

</body>
</html>