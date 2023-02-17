<h3 id="judul"> Daftar Nama Guru SMKN 1 Kuwus </h3>
    <button style='font-size: 14px; background-color:steelblue;' class="bttambah button" id='tambahGuru' >Tambah</button>
      <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>JK</th>
                <th>Mapel</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <!--Bagian isi tabel-->
        <?php
            include "../koneksi.php";
            $sql = "SELECT * FROM tb_guru";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>". $row["id"]."</td>
                <td>". $row["nama_guru"]."</td>
                <td>". $row["nip"]."</td>
                <td>". $row["jk"]."</td>
                <td>". $row["mapel"]."</td>
                <td>". $row["alamat"]."</td>
                <td>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:#4CAF50;' class='btnTable' id='lihatGuru' >Lihat</button>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:red;' class='btnTable' id='hapusGuru' >Hapus</button>
                </td>
            </tr>";   
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        ?>

<script>
  $("#tambahGuru").click(function(){
    $.ajax({
      url: "formGuru/tambahGuru.php",
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

  $(document).on('click', '#lihatGuru', function(e){
    var id = $(this).data('id');
    //alert(id);
    $.ajax({
      method: "POST",
      url: "formGuru/ubahGuru.php",
      data: {idGuru : id},
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

  $(document).on('click', '#hapusGuru', function(e){
    var id = $(this).data('id');
    $.ajax({
      method  :"POST",
      url     : "formGuru/deleteGuru.php",
      data    : {idGuru : id},
      success: function(data)
          {   
            alert(data)
            tampilGuru();       
          }
       });
  });

</script>