<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SMKN 1 Kuwus</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #d0d0;
        }
        header {
            background-color:steelblue;
            padding: 20px;
            margin-bottom: 15px;
            color: white;
            text-align: center;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            margin-left:5px;
        }
        .bt {
            margin-left:5px;
            float: center;
            text-align: center;
        }
        .bttambah {
            margin-bottom:5px;
            margin-left:5px;
            float: right;
            text-align: center;
        }
        
        .myTable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align:left;
        }
        .myTable td, .myTable th {
            border:  1px solid #ddd;
            padding: 10px;
        }
        .myTable tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .myTable tr:hover {
            background-color: #ddd;
        }
        .myTable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        .myinput {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
        }

    </style>
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
    </div>

    <!-- Bagian Tampilkan isi -->
    <div class="bt" id="tampil_hasil">
         <h3 id="judul">Selamat datang di halaman admin SMKN 1 Kuwus</h3> 
    </div>

<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/showData.js"></script>
<script>
  $("#cekHome").click(function(){
    tampilHome();
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

</script>

</body>
</html>