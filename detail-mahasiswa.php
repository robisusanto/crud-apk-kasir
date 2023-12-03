<?php
$tittle = 'Detail Mahasiswa';
include 'layout/header.php';



// mengambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET["id_mahasiswa"];

// menampilkan data mahasiswa
$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];







?>


<div class="container mt-3">
      <h1>Data <?= $mahasiswa["nama"];?></h1>
      <hr>
      <table class="table table-bordered table-striped mt-3">
            <tr>
                  <td>Nama</td>
                  <td>: <?= $mahasiswa["nama"]; ?></td>
            </tr>
            <tr>
                  <td>Prodi</td>
                  <td>: <?= $mahasiswa["prodi"]; ?></td>
            </tr>
            <tr>
                  <td>Jenis Kelamin</td>
                  <td>: <?= $mahasiswa["jk"]; ?></td>
            </tr>
            <tr>
                  <td>Telepon</td>
                  <td>: <?= $mahasiswa["telepon"]; ?></td>
            </tr>
            <tr>
                  <td>Email</td>
                  <td>: <?= $mahasiswa["email"]; ?></td>
            </tr>
            <tr>
                  <td width="50%">Foto</td>
                  <td>
                        <a href="asset/img/robi.jpg">
                              <img src="asset/img/robi.jpg" width="30%" alt="">
                        </a>
                  </td>
            </tr>
      </table>
                  <a href="mahasiswa.php" class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
</div>


<?php include 'layout/footer.php';?>