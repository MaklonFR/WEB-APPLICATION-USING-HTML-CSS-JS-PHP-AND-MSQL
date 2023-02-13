<?php
      //print_r($_POST);
      include "../koneksi.php";//panggil file koneksi database (koneksi.php)
      $idkelas   = $_POST['idKel'];
      $sql = "SELECT * FROM tb_kelas WHERE id= $idkelas";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $nkelas = $row['nama_kelas'];
          $jur = $row['jurusan'];
          $jsiswa = $row['jumlah_siswa'];
      } else {
          echo "0 result";
      }
?>

<h2 id="judul">Form Update Data Kelas</h2>

<form>
  <input type="text" class="myinput" id="nkelas" value="<?php echo $nkelas; ?>">
  <input type="text" class="myinput" id="jur" value="<?php echo $jur; ?>">
  <input type="number" class="myinput"  id="jsiswa" value="<?php echo $jsiswa; ?>" >
  <button 
    data-id ="<?php echo $idkelas ; ?>";
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='updateKel'>
    Update
  </button>
  <button 
    type= "button" 
    style='font-size: 14px; background-color:orange;' 
    class="button" 
    id='backToKel'>
    Batal
  </button>
</form>

<script>
  
  $("#backToKel").click(function(){
    tampilKelas();
  });

  $("#updateKel").click(function(){
    let id     = $(this).data('id'); 
    let nkelas = $("#nkelas").val();
    let jur    = $("#jur").val();
    let jsiswa = $("#jsiswa").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formKelas/updateKel.php",
      data  : {
               idKel:id, nkelas:nkelas, jur:jur, jsiswa:jsiswa
              },
      success: function(data)
          {   
            alert(data);
            tampilKelas();
          }
       });
  });
</script>

