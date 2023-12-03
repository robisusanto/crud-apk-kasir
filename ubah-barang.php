<?php
$tittle = 'Ubah Barang';
include 'layout/header.php';


// mengambil data barang dari url
$id_barang = (int)$_GET["id_barang"];

$barang = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

// cek apakah tombol ubah di tekan
if (isset($_POST["ubah"])) {
      if (update_barang($_POST) > 0 ) {
            echo "
                  <script>
                        alert('data berhasil diubah');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }else {
            echo "
                  <script>
                        alert('data gagal diubah');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }
}

?>
<div class="container mt-5">
      <h1>Ubah Barang</h1>
       <hr>

       <form action="" method="post">
            <input type="hidden" name="id_barang" value="<?= $barang["id_barang"]; ?>">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $barang["nama"]; ?>" id="nama" placeholder="nama barang..." required>
       </div>

       <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="number" name="jumlah" class="form-control" value="<?= $barang["jumlah"]; ?>" id="jumlah" placeholder="jumlah barang..." required>
       </div>

       <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" value="<?= $barang["harga"]; ?>" id="harga" placeholder="harga barang..." required>
       </div>

       <button type="submit" name="ubah" class="btn btn-primary ">Edit</button>
       </form>
</div>
      

<?php include 'layout/footer.php'; ?>