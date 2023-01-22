<?php

include 'koneksi.php';

$id   = "";

$data = mysqli_query($conn, "SELECT * FROM tb_gambar WHERE id_gambar = '" . $_GET['id'] . "'");
$r    = mysqli_fetch_array($data);

$nama = $r['nama'];
$file = $r['file'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Edit Gambar || SMPN 3 Talaga </title>
</head>

<body>
  <h2> Silahkan Edit Data </h2>
  <a href="data_gambar.php">Data</a>

  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td> Nama </td>
        <td> : </td>
        <td> <input type="text" name="nama" value="<?php echo $nama ?>"></td>
      </tr>

      <tr>
        <td> File </td>
        <td> : </td>
        <td>
          <input type="hidden" name="img" value="<?php echo $file ?>">
        </td>
        <td><input type="file" name="gambar"></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><img src="uploads/<?php echo $file ?>" width="100px" height="100px"></td>
      </tr>


      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="kirim" value="Update"></td>
      </tr>
    </table>
  </form>

  <?php

  if (isset($_POST['kirim'])) {
    $nama       = $_POST['nama'];
    $nama_file  = $_FILES['gambar']['name'];
    $source     = $_FILES['gambar']['tmp_name'];
    $folder     = './uploads/';

    if ($nama_file != '') {
      move_uploaded_file($source, $folder . $nama_file);
      $update = mysqli_query($conn, "UPDATE tb_gambar SET 
      nama = '" . $nama . "',
      file = '" . $nama_file . "'
      WHERE id_gambar = '" . $_GET['id'] . "'");

      if ($update) {
        echo 'Berhasil Update';
      } else {
        echo 'Gagal Update';
      }
    } else {
      $update = mysqli_query($conn, "UPDATE tb_gambar SET 
      nama = '" . $nama . "'
      WHERE id_gambar = '" . $_GET['id'] . "'");

      if ($update) {
        echo 'Berhasil Update';
      } else {
        echo 'Gagal Update';
      }
    }
  }

  ?>

</body>

</html>