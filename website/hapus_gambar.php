<?php

include 'koneksi.php';

$delete = mysqli_query($conn, "DELETE FROM tb_gambar WHERE id_gambar = '" . $_GET['id'] . "'");
if ($delete) {
  header('location:data_gambar.php');
} else {
  echo 'Gagal hapus';
}
