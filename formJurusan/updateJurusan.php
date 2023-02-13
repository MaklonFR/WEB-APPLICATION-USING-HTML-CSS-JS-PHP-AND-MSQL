<?php
      //print_r($_POST);
      include "../koneksi.php";//panggil file koneksi database (koneksi.php)
      $idJur   = $_POST['idJur'];
      $sql = "SELECT * FROM tb_jurusan WHERE id= $idJur";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $njurusan = $row['nama_jurusan'];
          $jkelas = $row['jumlah_kelas'];
      } else {
          echo "0 result";
      }
?>

<h2 id="judul">Form Update Data Jurusan</h2>

<form>
  <input type="text" class="myinput" id="njur" value="<?php echo $njurusan ; ?>" name="fname">
  <input type="text" class="myinput" id="jkelas" value="<?php echo $jkelas ; ?>" name="lname">
  <button 
    data-id ="<?php echo $idJur ; ?>";
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='updateJur'>
    Update
  </button>
  <button 
    type= "button" 
    style='font-size: 14px; background-color:orange;' 
    class="button" 
    id='backToJur'>
    Batal
  </button>
</form>

<script>
  
  $("#backToJur").click(function(){
    tampilJurusan();
  });

  $("#updateJur").click(function(){
    let id     = $(this).data('id'); 
    let njur   = $("#njur").val();
    let jkelas = $("#jkelas").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formJurusan/updateJur.php",
      data  : {
               idJur:id, njur:njur, jkelas:jkelas
              },
      success: function(data)
          {   
            alert(data);
            tampilJurusan();
          }
       });
  });
</script>

