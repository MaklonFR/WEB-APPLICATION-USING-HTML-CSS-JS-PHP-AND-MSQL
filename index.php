<?php
      if (!isset($_SESSION)) 
        {
        session_start();       
        }
  	   if(isset($_SESSION['user'])){
    	  header('location: admin.php');
  	  }
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
        <h2>Halaman Login</h2>
    </header>

    <!-- Bagian Tampilkan isi -->
    <div class="bt" id="tampil_hasil">
         <h3 id="judul">Selamat datang di halaman Login admin SMKN 1 Kuwus</h3> 
    
  <form>
    <input type="text" class="myinputLogin" id="user"placeholder="Masukan username" name="user">
    <input type="password" class="myinputLogin" id="pass" placeholder="Masukan password" name="pass">
  </form>
  <div class="centerButton">
  <button 
      type="button" 
      style='font-size: 14px; background-color:steelblue;' 
      class="button" 
      id='login'>
      Login
    </button>
    <button 
      type= "button" 
      style='font-size: 14px; background-color:orange;' 
      class="button" 
      id='backToJur'>
      Batal
    </button>
    </div>
</div>

<footer>
  <p>
    Copyright RPL SMKN 1 Kuwus - Prov. NTT
  </p>
</footer>

<script src="js/jquery-3.6.3.min.js"></script>

<script>
  
  $("#login").click(function(){
       var user       = $("#user").val();
       var pass       = $("#pass").val();
       if(user == "")
         {
          alert("Terjadi Kesalahan! Email belum diisi.");
          return;
          }  
        if (pass=="")
         {
          alert("Terjadi Kesalahan!. Password belum diisi.");
          return;
         }  
         
         $.ajax({
          type : 'POST',
          url  : 'login/cekLogin.php',
          data : {
                  user:user, 
                  pass:pass
                 },
          success :  function(data)
            {      
              alert(data);
              window.location.href = "admin.php";
            }
         });
  });

</script>


</body>
</html>