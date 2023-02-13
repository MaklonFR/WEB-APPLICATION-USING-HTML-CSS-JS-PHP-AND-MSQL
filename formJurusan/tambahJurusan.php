<h2 id="judul">Form Tambah Data Jurusan</h2>

<form>
  <input type="text" class="myinput" id="njur"placeholder="Masukan nama jurusan" name="fname">
  <input type="text" class="myinput" id="jkelas" placeholder="Masukan jumlah kelas" name="lname">
  <button 
    type="button" 
    style='font-size: 14px; background-color:steelblue;' 
    class="button" 
    id='simpanJur'>
    Simpan
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

  $("#simpanJur").click(function(){
    let njur = $("#njur").val();
    let jkelas = $("#jkelas").val();
    //alert("s");
    $.ajax({
      method: "POST",
      url   : "formJurusan/insertJur.php",
      data  : {
                njur:njur, jkelas:jkelas
              },
      success: function(data)
          {   
            alert(data);
            tampilJurusan();
          }
       });
  });
</script>

