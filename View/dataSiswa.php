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
                <button style='font-size: 14px; background-color:#4CAF50;' class='button' id='lihatSiswa' >Lihat</button>
                <button style='font-size: 14px; background-color:red;' class='button' id='hapusSiswa' >Hapus</button>
                </td>
            </tr>";   
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
        ?>
        