<?php

require_once("koneksi.php");

if (!isset($_SESSION["login"])) {
  header("Location : login.php");
  exit;
}

function tambahuploadberita()
{
  global $conn;
  $keterangan = mysqli_real_escape_string($conn, htmlspecialchars($_POST["keterangan"]));
  $foto  = upload("foto_berita");
  $id_admin   = $_SESSION['id'];
  if (!$foto) {
    return false;
  }

  mysqli_query($conn, "INSERT INTO berita (keterangan, foto_berita) VALUES ('$keterangan', '$foto')");
  if (mysqli_affected_rows($conn) > 0) {
    $status = 'Berhasil tambah foto';
  } else {
    $status = 'Gagal tambah Foto';
  }

  return $status;
}
