<?php

include './koneksi.php';

$sukses = "";
$error  = "";
$ekstensigambar = "";
$ekstensi = "";
$ukuran = "";

if (isset($_POST['tambah'])) {
  $ekstensi_diperbolehkan  = array('png', 'jpg', 'jpeg');
  $nama = $_FILES['foto']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran  = $_FILES['foto']['size'];
  $file_tmp = $_FILES['foto']['tmp_name'];
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
      move_uploaded_file($file_tmp, 'berita/' . $nama);
      $query = mysqli_query($conn, "INSERT INTO berita VALUES (NULL,'" . $_POST['keterangan'] . "', '" . $nama . "',NULL)");
      if ($query) {
        $sukses = "File Berhasil Diupload";
      } else {
        $error = "Gagal Mengupload Gambar";
      }
    } else {
      $error = "Ukuran File/foto Terlalu Besar";
    }
  } else {
    $error = "Ekstensi File Tidak Sesuai Dengan Ketentuan ('JPG', 'PNG', 'JPEG') ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard || Halaman Berita </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/dash_berita.css">
</head>

<body>

  <div class="mx-auto">
    <div class="card">
      <div class="card-header">
        <p class="float-start"> Tambah Berita </p>
        <a href="dashboard_admin.php"><button type="" class="btn btn-secondary float-end">Back</button></a>
        <h3 class="text-center float"> Berita - Berita </h3>
      </div>
      <div class="card-body">

        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:15;url=dash_berita.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:15;url=dash_berita.php");
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="keterangan">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label"></label>
            <input type="file" name="foto" placeholder=""><br>
          </div>

          <div class="col-12">
            <input type="submit" class="btn  btn-primary" name="tambah" value="Simpan Berita">
          </div>
        </form>

      </div>
    </div>

    <!-- Untuk Mengeluarkan Data -->


    <div class="card text-white bg-primary"> Berita - Berita </div>
    <?php
    $berita = mysqli_query($conn, "SELECT * FROM berita");
    while ($hasil = mysqli_fetch_array($berita)) {
    ?>
      <div class="kotak">
        <img style="" src="berita/<?php echo $hasil['foto_berita']; ?>" alt=""> <!-- Untuk Gambar -->
        <div class="card-body">
          <div class="card-title">
            <?php echo $hasil['keterangan']  . "<br> <br>" ?>
          </div>
          <a href="hapus_berita.php?id= <?php echo $hasil['id']; ?><button type=" button class="btn btn-danger">Delete</button></a></a>
        </div>
      </div>
    <?php } ?>



  </div>

  </div>
</body>