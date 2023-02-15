<?php
      //print_r($_POST);
      include "../koneksi.php";//panggil file koneksi database (koneksi.php)
      $idsiswa   = $_POST['idSiswa'];
      $sql = "SELECT * FROM tb_siswa WHERE id= $idsiswa";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          $row        = $result->fetch_assoc();
          $nama_siswa = $row['nama_siswa'];
          $nisn       = $row['nisn'];
          $nis        = $row['nis'];
          $jk_siswa   = $row['jk'];
          $kelas      = $row['kelas'];
          $jurusan    = $row['jurusan'];
          $alamat     = $row['alamat'];
      } else {
          echo "0 result";
      }
?>

<h2 id="judul">Form Update Data Siswa</h2>

<form>
<input type="text" value="<?php echo $nama_siswa ?>" class="myinput" id="nama_Siswa"placeholder="Masukan nama Siswa">
  <input type="text" value="<?php echo $nisn ?>" class="myinput" id="nisn"placeholder="Masukan NISN">
  <input type="text" value="<?php echo $nis ?>" class="myinput" id="nis" placeholder="Masukan NIS">
  <select class ="myinput" id="jk_Siswa" name="jk_Siswa"> 
      <option value="<?php echo $jk_siswa ?>"> <?php echo $jk_siswa ?> </option> 
      <option value="Laki-Laki"> Laki-Laki </option>  
      <option value="Perempuan"> Perempuan </option>                                               
  </select>
  <?php 
  /*Pilih Media pengiriman*/
    include "../koneksi.php";               
    $sql_cat = mysqli_query($conn,"SELECT nama_kelas FROM tb_kelas"); 
   ?>
  <select class ="myinput" id="kelas" name="kelas"> 
      <option value="<?php echo $kelas ?>"> <?php echo $kelas ?> </option>     
       <?php                       
        while($rs_cat = mysqli_fetch_assoc($sql_cat)){ 
            echo '<option value="'.$rs_cat['nama_kelas'].'">'.$rs_cat['nama_kelas'].'</option>';
        }                     
       ?>                                             
  </select>
  <?php 
  /*Pilih Media pengiriman*/
    include "../koneksi.php";               
    $sql_cat = mysqli_query($conn,"SELECT nama_jurusan FROM tb_jurusan"); 
   ?>
  <select class ="myinput" id="jurusan" name="jurusan"> 
      <option value="<?php echo $jurusan ?>"> <?php echo $jurusan ?> </option> 
      <?php                       
        while($rs_cat = mysqli_fetch_assoc($sql_cat)){ 
            echo '<option value="'.$rs_cat['nama_jurusan'].'">'.$rs_cat['nama_jurusan'].'</option>';
        }                     
       ?>                                               
  </select>
  <input type="text" value="<?php echo $alamat ?>" class="myinput" id="alamat_Siswa" placeholder="Masukan alamat Siswa">
  
  <button 
    data-id ="<?php echo $idsiswa ; ?>";
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='updateSiswa'>
    Update
  </button>
  <button 
    type= "button" 
    style='font-size: 14px; background-color:orange;' 
    class="button" 
    id='backToSiswa'>
    Batal
  </button>
</form>

<script>
  
  $("#backToSiswa").click(function(){
    tampilSiswa();
  });

  $("#updateSiswa").click(function(){
    let id          = $(this).data('id');
    let nama_Siswa  = $("#nama_Siswa").val();
    let nisn        = $("#nisn").val();
    let nis         = $("#nis").val();
    let jk_Siswa    = $("#jk_Siswa").val();
    let kelas       = $("#kelas").val();
    let jurusan     = $("#jurusan").val();
    let alamat_Siswa= $("#alamat_Siswa").val();

    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formSiswa/updateSiswa.php",
      data  : {
                idSiswa: id,
                nama_Siswa:nama_Siswa,
                nisn:nisn,
                nis:nis,
                jk_Siswa:jk_Siswa,
                kelas:kelas,
                jurusan:jurusan,
                alamat_Siswa:alamat_Siswa
              },
      success: function(data)
          {   
            alert(data);
            tampilSiswa();
          }
       });
  });
</script>

