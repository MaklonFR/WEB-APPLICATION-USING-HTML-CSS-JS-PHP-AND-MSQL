<h2 id="judul">Form Tambah Data Siswa</h2>

<form>
  <input type="text" class="myinput" id="nama_Siswa"placeholder="Masukan nama Siswa">
  <input type="text" class="myinput" id="nisn"placeholder="Masukan NISN">
  <input type="text" class="myinput" id="nis"placeholder="Masukan NIS">
  <select class ="myinput" id="jk_Siswa" name="jk_Siswa"> 
      <option value="a"> -Pilih jenis kelamin- </option> 
      <option value="Laki-Laki"> Laki-Laki </option>  
      <option value="Perempuan"> Perempuan </option>                                               
  </select>
  <?php 
  /*Pilih Media pengiriman*/
    include "../koneksi.php";               
    $sql_cat = mysqli_query($conn,"SELECT nama_kelas FROM tb_kelas"); 
   ?>
  <select class ="myinput" id="kelas" name="kelas"> 
      <option value="a"> -Pilih jenis kelas- </option>     
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
      <option value="a"> -Pilih jenis jurusan- </option> 
      <?php                       
        while($rs_cat = mysqli_fetch_assoc($sql_cat)){ 
            echo '<option value="'.$rs_cat['nama_jurusan'].'">'.$rs_cat['nama_jurusan'].'</option>';
        }                     
       ?>                                               
  </select>
  <input type="text" class="myinput" id="alamat_Siswa" placeholder="Masukan alamat Siswa">
  <button 
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='simpanSiswa'>
    Simpan
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

  $("#simpanSiswa").click(function(){
    let nama_Siswa   = $("#nama_Siswa").val();
    let nisn         = $("#nisn").val();
    let nis         = $("#nis").val();
    let jk_Siswa     = $("#jk_Siswa").val();
    let kelas     = $("#kelas").val();
    let jurusan       = $("#jurusan").val();
    let alamat_Siswa = $("#alamat_Siswa").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formSiswa/insertSiswa.php",
      data  : {
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

