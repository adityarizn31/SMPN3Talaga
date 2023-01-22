<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Upload Gambar || SMPN 3 Talaga </title>
</head>

<body>
  <h2> Silahkan Input Data </h2>
  <a href="data_gambar.php">Data</a>

  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td> Nama </td>
        <td> : </td>
        <td> <input type="text" name="nama"></td>
      </tr>

      <tr>
        <td> File </td>
        <td> : </td>
        <td><input type="file" name="gambar"></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="kirim" value="Kirim"></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['kirim'])) {
    $nama       = $_POST['nama'];
    $nama_file  = $_FILES['gambar']['name'];
    $source     = $_FILES['gambar']['tmp_name'];
    $folder     = './uploads/';

    move_uploaded_file($source, $folder . $nama_file);

    $insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES(
      NULL, 
      '$nama',
      '$nama_file')");

    if ($insert) {
      echo 'Berhasil Upload';
    } else {
      echo 'Gagal Upload';
    }
  }
  ?>

</body>

</html>