<?php

include 'koneksi.php';

$sukses = "";
$error  = "";

if (isset($_POST["submit"])) {
  $ekstensi_diperbolehkan  = array('png', 'jpg', 'jpeg');

  $nama       = $_POST['nama'];
  $keterangan = $_POST['keterangan'];

  $foto       = $_FILES['foto']['name'];
  $sumber     = $_FILES['foto']['tmp_name'];

  $folder     = './kepsekfoto/';

  $x = explode('.', $foto);
  $ekstensi = strtolower(end($x));

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($sumber, $folder . $foto);
    $insert = mysqli_query($conn, "INSERT INTO profil VALUES (NULL,'$nama', '$keterangan', '$foto')");
    if ($insert) {
      $sukses = 'Data berhasil Disimpan';
    } else {
      $error  = 'Data gagal Disimpan';
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
  <title> Ubah Profil </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <style>
    .mx-auto {
      width: 1150px;
    }

    .card {
      margin-top: 12px;
      border: 1px solid;
    }
  </style>
</head>

<body>

  <!-- Bagian Edit Data -->
  <div class="mx-auto">
    <div class="card">
      <div class="card-header">
        <p class="float-start"> Ubah Profil </p>
        <a href="dashboard_admin.php"><button type="button" class="btn btn-secondary float-end">Back</button></a>
        <h3 class="text-center float"> Profil </h3>
      </div>
      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:10;url=dash_profil.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:10;url=dash_profil.php");
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="nama" class="form-label"> Nama Kepala Sekolah </label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
          </div>

          <div class="mb-3">
            <label for="keterangan" class="form-label"> Keterangan </label>
            <textarea cols="129" rows="10" class="form-control" id="keterangan" name="keterangan"></textarea>
            <!-- <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="keterangan"> -->

          </div>

          <div class="mb-3">
            <label for="foto" class="form-label"> Gambar </label> <br>
            <input type="file" name="foto" id="foto">
          </div>

          <div class="col-12">
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
          </div>

        </form>

      </div>
    </div>

    <!-- Menampilkan Data -->
    <div class="card">
      <div class="card-header text-white bg-primary"> Halaman Profil Sekolah </div>

      <div class="card-body">
        <?php
        $profil = mysqli_query($conn, "SELECT * FROM profil");
        while ($hasil = mysqli_fetch_array($profil)) {
        ?>
          <div class="berita" style="padding:20px; text-align:center;">
            <div class="p-3 m-2 border-0">
              <div class="row">
                <div class="gambarr">
                  <img src="kepsekfoto/<?php echo $hasil['foto_kepsek'] ?>" alt="" style="float: left; width: 300px;height: 300px; margin: 1%;">
                  <div class="nama">
                    <h3><?php echo $hasil['nama'] ?></h3>
                  </div>
                  <div class="teks">
                    <?php echo $hasil['keterangan']  ?>
                    </p>
                  </div>
                  <a href="hapus_profil.php?id= <?php echo $hasil['id']; ?><button type=" button class="btn btn-danger">Delete</button></a></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>



  </div>







</body>

</html>