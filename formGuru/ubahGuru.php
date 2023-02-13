<?php
      //print_r($_POST);
      include "../koneksi.php";//panggil file koneksi database (koneksi.php)
      $idguru   = $_POST['idGuru'];
      $sql = "SELECT * FROM tb_guru WHERE id= $idguru";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          $row      = $result->fetch_assoc();
          $nama_guru= $row['nama_guru'];
          $nip      = $row['nip'];
          $jk_guru  = $row['jk'];
          $mapel    = $row['mapel'];
          $alamat   = $row['alamat'];
      } else {
          echo "0 result";
      }
?>

<h2 id="judul">Form Update Data Guru</h2>

<form>
<input type="text" class="myinput" id="nama_guru" value ="<?php echo $nama_guru; ?>">
  <input type="text" class="myinput" id="nip" value ="<?php echo $nip; ?>">
  <select class ="myinput" id="jk_guru" name="jk_guru"> 
      <option value="<?php echo $jk_guru; ?>"> <?php echo $jk_guru; ?> </option> 
      <option value="Laki-Laki"> Laki-Laki </option>  
      <option value="Perempuan"> Perempuan </option>                                               
  </select>
  <input type="text" class="myinput" id="mapel" value ="<?php echo $mapel; ?>">
  <input type="text" class="myinput" id="alamat_guru" value ="<?php echo $alamat; ?>">
  
  <button 
    data-id ="<?php echo $idguru ; ?>";
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='updateGuru'>
    Update
  </button>
  <button 
    type= "button" 
    style='font-size: 14px; background-color:orange;' 
    class="button" 
    id='backToGuru'>
    Batal
  </button>
</form>

<script>
  
  $("#backToGuru").click(function(){
    tampilGuru();
  });

  $("#updateGuru").click(function(){
    let id          = $(this).data('id'); 
    let nama_guru   = $("#nama_guru").val();
    let nip         = $("#nip").val();
    let jk_guru     = $("#jk_guru").val();
    let mapel       = $("#mapel").val();
    let alamat_guru = $("#alamat_guru").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formGuru/updateGuru.php",
      data  : {
                idGuru: id,
                nama_guru:nama_guru,
                nip:nip,
                jk_guru:jk_guru,
                mapel:mapel,
                alamat_guru:alamat_guru
              },
      success: function(data)
          {   
            alert(data);
            tampilGuru();
          }
       });
  });
</script>

