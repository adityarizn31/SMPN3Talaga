<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM fotoutama WHERE id = '$id'");
  $data = $query->fetch_array();

  $query_hapus = mysqli_query($conn, "DELETE FROM fotoutama WHERE id = '$id'");
  unlink('fotoutamaa/' . $data['img_utama']);
  header('location:dash_fotoutama.php');
} else {
  header('location:dash_fotoutama.php');
}
