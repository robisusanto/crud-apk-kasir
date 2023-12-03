<?php
$tittle = 'Tambah Barang';
include 'layout/header.php';


// cek apakah tombol tambah di tekan

if (isset($_POST["tambah"])) {
      if (create_barang($_POST) > 0 ) {
            echo "
                  <script>
                        alert('data berhasil ditambahkan');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }else {
            echo "
                  <script>
                        alert('data gagal ditambahkan');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }
}

?>
<div class="container mt-5">
      <h1>Tambah Barang</h1>
       <hr>

       <form action="" method="post">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="nama barang..." required>
       </div>

       <div class="mb-2">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah barang..." required>
       </div>

       <div class="mb-2">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" id="harga" placeholder="harga barang..." required>
       </div>

       <button type="submit" name="tambah" class="btn btn-primary ">Tambah</button>
       </form>
</div>
      

<?php include 'layout/footer.php'; ?>