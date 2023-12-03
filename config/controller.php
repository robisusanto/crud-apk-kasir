<?php

// fungsi menampilkan data
function select($query) {
      // panggil database
      global $db;

      $result = mysqli_query($db, $query);
      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
      }
      return $rows;
}

// fungsi tambah barang

function create_barang($post) {
      global $db;

      $nama = $post["nama"];
      $jumlah = $post["jumlah"];
      $harga = $post["harga"];

      $query = "INSERT INTO barang
                  VALUES
                  ('', '$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP());
                  ";

                  mysqli_query($db, $query);

                  return mysqli_affected_rows($db);
}

// fungsi mengubah data barang

function update_barang($post) {
      global $db;

      $id_barang = $post["id_barang"];
      $nama = $post["nama"];
      $jumlah = $post["jumlah"];
      $harga = $post["harga"];

      $query = " UPDATE barang SET
                  nama = '$nama',
                  jumlah = '$jumlah',
                  harga = '$harga'
                  WHERE id_barang = $id_barang
                  ";

                  mysqli_query($db, $query);

                  return mysqli_affected_rows($db);


}

// fungsi menghapus data barang 

function delete_barang($id_barang) {
      global $db;

      // query hapus data barang
      $query = "DELETE FROM barang WHERE id_barang = $id_barang";

      mysqli_query($db, $query);

      return mysqli_affected_rows($db);
}

// fungsi tambah mahasiswa

function create_mahasiswa($post) {
      global $db;

      $nama       = $post["nama"];
      $prodi      = $post["prodi"];
      $jk         = $post["jk"];
      $telepon    = $post["telepon"];
      $email      = $post["email"];
      $foto       = $post["foto"];

      $query = "INSERT INTO mahasiswa
                  VALUES
                  ('', '$nama', '$prodi', '$jk', '$telepon', '$email', '$foto');
                  ";

                  mysqli_query($db, $query);

                  return mysqli_affected_rows($db);
}



?>