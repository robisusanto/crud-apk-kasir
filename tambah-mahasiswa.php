<?php
$tittle = 'Tambah Mahasiswa';
include 'layout/header.php';


// cek apakah tombol tambah di tekan

if (isset($_POST["tambah"])) {
      if (create_mahasiswa($_POST) > 0 ) {
            echo "
                  <script>
                        alert('data mahasiswa berhasil ditambahkan');
                        document.location.href = 'mahasiswa.php';
                  </script>
                  ";
      }else {
            echo "
                  <script>
                        alert('data mahasiswa gagal ditambahkan');
                        document.location.href = 'mahasiswa.php';
                  </script>
                  ";
      }
}

?>
<div class="container mt-5">
      <h1>Tambah Mahasiswa</h1>
       <hr>

       <form action="" method="post" entype="multipart/form-data">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="nama mahasiswa..." required>
       </div>

       <div class="row">
            <div class="mb-2 col-6">
                  <label for="prodi" class="form-label">Prodi</label>
                  <select name="prodi" id="prodi" class="form-control" required>
                        <option value="">-- Pilih Prodi --</option>
                        <option value="Teknik Komputer"> Teknik Komputer </option>
                        <option value="Teknik Informatika"> Teknik Informatika </option>
                        <option value="Teknik Petrokimia"> Teknik Petrokimia </option>
                        <option value="Teknik Perminyakan"> Teknik Perminyakan </option>
                  </select>
            </div>

            <div class="mb-2 col-6">
                  <label for="jk" class="form-label">Jenis Kelamin</label>
                  <select name="jk" id="jk" class="form-control" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki - Laki"> Laki - Laki </option>
                        <option value="Perempuan"> Perempuan </option>
                  </select>
            </div>

            <div class="mb-2">
                  <label for="telepon" class="form-label">Telepon</label>
                  <input type="number" name="telepon" class="form-control" id="telepon" placeholder="telepon..." required>
            </div>

            <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="email..." required>
            </div>

            <div class="mb-2">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="text" name="foto" class="form-control" id="foto" placeholder="foto..." required>
            </div>
       </div>

       <button type="submit" name="tambah" class="btn btn-primary ">Tambah</button>
       </form>
</div>
      

<?php include 'layout/footer.php'; ?>