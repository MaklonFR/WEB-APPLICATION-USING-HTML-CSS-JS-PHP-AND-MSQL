<h2 id="judul">Form Tambah Data Kelas</h2>

<form>
  <input type="text" class="myinput" id="nkelas"placeholder="Masukan nama Kelas">
  <input type="text" class="myinput" id="jur"placeholder="Masukan jurusan">
  <input type="number" class="myinput"  id="jsiswa" placeholder="Masukan jumlah siswa">
  <button 
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='simpanKel'>
    Simpan
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

  $("#simpanKel").click(function(){
    let nkelas = $("#nkelas").val();
    let jur    = $("#jur").val();
    let jsiswa = $("#jsiswa").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formKelas/insertKel.php",
      data  : {
                nkelas:nkelas, jur:jur, jsiswa:jsiswa
              },
      success: function(data)
          {   
            alert(data);
            tampilKelas();
          }
       });
  });
</script>

