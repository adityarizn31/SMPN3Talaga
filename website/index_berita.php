<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Berita </title>
  <link rel="stylesheet" href="css/index_berita.css">
</head>

<body>

  <header>
    <ul>
      <li><a href=""> Beranda </a></li>
      <li><a href=""> Produk </a></li>
    </ul>
  </header>

  <?php

  $berita = mysqli_query($conn, "SELECT * FROM berita");
  while ($hasil = mysqli_fetch_array($berita)) {
  ?>

    <div class="box-produk">
      <img src="berita/<?php $hasil['foto_berita']; ?>" alt="Foto">
      <?php echo $hasil['keterangan'] . "<br>"; ?>
    </div>

  <?php } ?>

</body>

</html>