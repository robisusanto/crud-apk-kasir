<?php
include 'config/app.php';

// menerima id barang yang di pilih pengguna
$id_barang = $_GET["id_barang"];

if (delete_barang($id_barang) > 0 ) {
      echo "
            <script>
                  alert('data barang berhasil dihapus')
                  document.location.href = 'index.php';
            </script>
            ";
}else {
      echo "
            <script>
                  alert('data barang gagal dihapus')
                  document.location.href = 'index.php';
            </script>
            ";
}



?>