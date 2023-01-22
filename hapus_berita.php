<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$id'");
  $data = $query->fetch_array();

  $query_hapus = mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");
  unlink('berita/' . $data['foto_berita']);
  header('location:dash_berita.php');
} else {
  header('location:dash_berita.php');
}
