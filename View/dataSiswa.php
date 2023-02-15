<h3 id="judul"> Daftar Nama Siswa SMKN 1 Kuwus </h3>
    <button style='font-size: 14px; background-color:steelblue;' class="bttambah button" id='tambahSiswa' >Tambah</button>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <!--Bagian isi tabel-->
        <?php
            include "../koneksi.php";
            $sql = "SELECT * FROM tb_siswa";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          echo "<tr>
                <td>". $row["id"]."</td>
                <td>". $row["nama_siswa"]."</td>
                <td>". $row["nisn"]."</td>
                <td>". $row["nis"]."</td>
                <td>". $row["jk"]."</td>
                <td>". $row["kelas"]."</td>
                <td>". $row["jurusan"]."</td>
                <td>". $row["alamat"]."</td>
                <td>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:#4CAF50;' class='button' id='lihatSiswa' >Lihat</button>
                <button data-id=".$row["id"]." style='font-size: 14px; background-color:red;' class='button' id='hapusSiswa' >Hapus</button>
                </td>
            </tr>";   
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        ?>

<script>
  $("#tambahSiswa").click(function(){
    $.ajax({
      url: "formSiswa/tambahSiswa.php",
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

  $(document).on('click', '#lihatSiswa', function(e){
    var id = $(this).data('id');
    //alert(id);
    $.ajax({
      method: "POST",
      url: "formSiswa/ubahSiswa.php",
      data: {idSiswa : id},
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

  $(document).on('click', '#hapusSiswa', function(e){
    var id = $(this).data('id');
    $.ajax({
      method  :"POST",
      url     : "formSiswa/deleteSiswa.php",
      data    : {idSiswa : id},
      success: function(data)
          {   
            alert(data)
            tampilSiswa();       
          }
       });
  });

</script>