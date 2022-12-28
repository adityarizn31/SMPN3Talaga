<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Input Berita </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .mx-auto {
      width: 1150px;
    }

    .card {
      margin-top: 12px;
    }
  </style>
</head>

<body>

  <div class="mx-auto">
    <div class="card">
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="keterangan" class="form-label"> Keterangan </label>
            <input type="text" name="keterangan" placeholder="Masukan Keterangan">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label"></label>
            <input type="file" name="foto" placeholder=""><br>
          </div>

          <div class="col-12">
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan Berita">
          </div>

        </form>
      </div>
    </div>
  </div>





  <?php

  include 'koneksi.php';

  if (isset($_POST['simpan'])) {
    $folder = './berita/';
    $name_p = $_FILES['foto']['name'];
    $rename = date('Hs') . $name_p;
    $sumber_p = $_FILES['foto']['tmp_name'];
    move_uploaded_file($sumber_p, $folder . $rename);
    $insert = mysqli_query($conn, "INSERT INTO berita VALUES (NULL,'" . $_POST['keterangan'] . "', '" . $rename . "',NULL)");
    if ($insert) {
      echo 'Data berhasil Disimpan';
    } else {
      echo 'Data gagal Disimpan';
    }
  } ?>

</body>

</html>