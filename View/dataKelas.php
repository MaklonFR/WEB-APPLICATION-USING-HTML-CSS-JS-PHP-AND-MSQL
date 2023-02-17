<h3 id="judul"> Daftar Kelas SMKN 1 Kuwus </h3>
    <button style='font-size: 14px; background-color:steelblue;' class="bttambah button" id='tambahKelas' >Tambah</button>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Jumlah Siswa</th>
                <th>Aksi</th>
            </tr>
            <!--Bagian isi tabel-->
        <?php
            include "../koneksi.php";
            $sql = "SELECT * FROM tb_kelas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>". $row["id"]."</td>
                <td>". $row["nama_kelas"]."</td>
                <td>". $row["jurusan"]."</td>
                <td>". $row["jumlah_siswa"]."</td>
                <td>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:#4CAF50;' class='btnTable' id='lihatKelas' >Lihat</button>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:red;' class='btnTable' id='hapusKelas' >Hapus</button>
                </td>
            </tr>";   
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        ?>
<script>
  $("#tambahKelas").click(function(){
    $.ajax({
      url: "formKelas/tambahKelas.php",
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

  $(document).on('click', '#lihatKelas', function(e){
    var id = $(this).data('id');
    //alert(id);
    $.ajax({
      method: "POST",
      url: "formKelas/updateKelas.php",
      data: {idKel : id},
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

  $(document).on('click', '#hapusKelas', function(e){
    var id = $(this).data('id');
    $.ajax({
      method  :"POST",
      url     : "formKelas/deleteKel.php",
      data    : {idKelas : id},
      success: function(data)
          {   
            alert(data)
            tampilKelas();       
          }
       });
  });

</script>