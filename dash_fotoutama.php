<?php

include 'koneksi.php';

$sukses   = "";
$error    = "";

if (isset($_POST["submit"])) {
  $ekstensi_diperbolehkan  = array('png', 'jpg', 'jpeg');

  $keterangan = $_POST['keterangan'];

  $foto       = $_FILES['foto']['name'];
  $sumber     = $_FILES['foto']['tmp_name'];

  $folder     = './fotoutamaa/';

  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($sumber, $folder . $foto);
    $insert = mysqli_query($conn, "INSERT INTO fotoutama VALUES (NULL, '$keterangan', '$foto')");
    if ($insert) {
      echo 'Data berhasil Disimpan';
    } else {
      echo 'Data gagal Disimpan';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard || Foto Utama</title>
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
        <p class="float-start"> Ubah Foto Utama </p>
        <a href="dashboard_admin.php"><button type="" class="btn btn-secondary float-end">Back</button></a>
        <h3 class="text-center float"> Foto Utama </h3>
      </div>
      <div class="card-body">

        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:5;url=dash_fotoutama.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:5;url=dash_fotoutama.php");
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
            <input type="submit" class="btn  btn-primary" name="submit" value="simpanfoto">
          </div>
        </form>

      </div>
    </div>


    <div class="card">
      <div class="card-header text-white bg-primary"> Foto Utama </div>
      <br>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <?php
        $fotoutamaa = mysqli_query($conn, "SELECT * FROM fotoutama");
        while ($hasil = mysqli_fetch_array($fotoutamaa)) {
        ?>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="500">
              <center> <img src="fotoutamaa/<?php echo $hasil['imgutama']; ?>" alt="" margin="auto"> </center>
              <div class="carousel-caption d-none d-md-block text-white">
                <h5><?php echo $hasil['keterangan'] ?></h5>
              </div>
            </div>
          </div>
          <br>
          <center><a href="hapus_fotoutama.php?id= <?php echo $hasil['id']; ?><button type=" button class="btn btn-danger">Delete</button></a></a></center>
        <?php } ?>
      </div>
      <br>
    </div>

  </div>

</body>

</html>