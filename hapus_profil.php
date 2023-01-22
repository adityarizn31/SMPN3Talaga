<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM profil WHERE id = '$id'");
  $data = $query->fetch_array();

  $query_hapus = mysqli_query($conn, "DELETE FROM profil WHERE id = '$id'");
  unlink('kepsekfoto/' . $data['foto_kepsek']);
  header('location:dash_profil.php');
} else {
  header('location:dash_profil.php');
}
