<?php
$tittle = 'Data Barang';
include 'layout/header.php';


$data_barang = select("SELECT * FROM barang");


?>


<div class="container mt-3">
      <h1>Data Barang</h1>
      <hr>
      <a href="tambah-barang.php" class="btn btn-primary">Tambah</a>

      <table class="table table-bordered table-striped mt-3" id="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach ($data_barang as $barang) :?>
    <tr>
      <th><?= $i;?></th>
      <td><?= $barang["nama"];?></td>
      <td><?= $barang["jumlah"];?></td>
      <td>Rp. <?= number_format($barang["harga"],0,',','.');?></td>
      <td><?= date("d/m/y H:i:s ", strtotime($barang["tanggal"])); ?></td>
      <td width="15%" class="text-center">
            <a href="ubah-barang.php?id_barang= <?= $barang["id_barang"];?> " class="btn btn-success btn-sm">Edit</a>
            <a href="hapus-barang.php?id_barang= <?= $barang["id_barang"]?>" type="submit" name="hapus" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?');">Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>   
  </tbody>
 </table>
</div>

<?php include 'layout/footer.php';?>
      

 