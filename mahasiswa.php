<?php
$tittle = 'Daftar Mahasiswa';
include 'layout/header.php';



// menampilkan data mahasiswa
$data_mahasiswa = select("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");




?>


<div class="container mt-3">
      <h1>Data Mahasiswa</h1>
      <hr>
      <a href="tambah-mahasiswa.php" class="btn btn-primary">Tambah</a>

      <table class="table table-bordered table-striped mt-3" id="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Telepon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1;?>
      <?php foreach ($data_mahasiswa as $mahasiswa) :?>
            <tr>
                  <td><?= $i; ?></td>
                  <td><?= $mahasiswa["nama"];?></td>
                  <td><?= $mahasiswa["prodi"]; ?></td>
                  <td><?= $mahasiswa["jk"];?></td>
                  <td><?= $mahasiswa["telepon"];?></td>
                  <td width="20%" class="text-center">
                        <a href="detail-mahasiswa.php?id_mahasiswa= <?= $mahasiswa["id_mahasiswa"]; ?>" class="btn btn-secondary btn-sm">Detail</a>
                        <a href="" class="btn btn-success btn-sm">Ubah</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
            </tr>


      <?php $i++;?>
      <?php endforeach; ?>
  </tbody>
 </table>
</div>













<?php include 'layout/footer.php';?>