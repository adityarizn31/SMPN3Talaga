<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Data || SMPN 3 Talaga </title>
</head>

<body>
  <h2> Data Gambar </h2>
  <a href="edit_gambar.php">Tambah</a>

  <table border="1">
    <tr>
      <td> No </td>
      <td> Nama </td>
      <td> Gambar </td>
      <td> Aksi </td>
    </tr>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM tb_gambar");
    while ($row = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?php echo $row['id_gambar'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><img src="uploads/<?php echo $row['file'] ?>" width="100px" height="100px" alt=""></td>
        <td>
          <a href="edit_gambar.php?id=<?php echo $row['id_gambar'] ?>">Edit</a>
          <a href="hapus_gambar.php?id=<?php echo $row['id_gambar'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>