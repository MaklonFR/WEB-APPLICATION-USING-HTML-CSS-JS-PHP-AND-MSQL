<h2 id="judul">Form Tambah Data Guru</h2>

<form>
  <input type="text" class="myinput" id="nama_guru"placeholder="Masukan nama guru">
  <input type="text" class="myinput" id="nip"placeholder="Masukan NIP">
  <select class ="myinput" id="jk_guru" name="jk_guru"> 
      <option value="a"> -Pilih jenis kelamin- </option> 
      <option value="Laki-Laki"> Laki-Laki </option>  
      <option value="Perempuan"> Perempuan </option>                                               
  </select>
  <input type="text" class="myinput" id="mapel"placeholder="Masukan Mapel">
  <input type="text" class="myinput" id="alamat_guru" placeholder="Masukan alamat guru">
  <button 
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='simpanGuru'>
    Simpan
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

  $("#simpanGuru").click(function(){
    let nama_guru   = $("#nama_guru").val();
    let nip         = $("#nip").val();
    let jk_guru     = $("#jk_guru").val();
    let mapel       = $("#mapel").val();
    let alamat_guru = $("#alamat_guru").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formGuru/insertGuru.php",
      data  : {
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

