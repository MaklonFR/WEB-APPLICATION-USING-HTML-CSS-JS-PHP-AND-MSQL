<h3 id="judul"> Daftar Jurusan SMKN 1 Kuwus </h3>
    <button style='font-size: 14px; background-color:steelblue;' class="bttambah button" id='tambahJur' >Tambah</button>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Jumlah Kelas</th>
                <th>Aksi</th>
            </tr>
            <!--Bagian isi tabel-->
        <?php
            include "../koneksi.php";
            $sql = "SELECT * FROM tb_jurusan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>". $row["id"]."</td>
                <td>". $row["nama_jurusan"]."</td>
                <td>". $row["jumlah_kelas"]."</td>
                <td>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:#4CAF50;' class='btnTable' id='lihatJur' >Lihat</button>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:red;' class='btnTable' id='hapusJur' >Hapus</button>
                </td>
            </tr>";   
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        ?>
        
<script>
  $("#tambahJur").click(function(){
    $.ajax({
      url: "formJurusan/tambahJurusan.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
  });

  $(document).on('click', '#lihatJur', function(e){
    var id = $(this).data('id');
    //alert(id);
    $.ajax({
      method: "POST",
      url: "formJurusan/updateJurusan.php",
      data: {idJur : id},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
  });

  $(document).on('click', '#hapusJur', function(e){
    var id = $(this).data('id');
    $.ajax({
      method  :"POST",
      url     : "formJurusan/deleteJur.php",
      data    : {idJur : id},
      success: function(data)
          {   
            alert(data);
            tampilJurusan();       
          }
       });
  });

</script>