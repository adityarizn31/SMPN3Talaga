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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman Berita </title>
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
      border: 1px solid;
      /* float: left; */
      position: relative;
    }

    .card-body {
      margin: 2.2%;
    }

    .berita {
      float: left;
      min-height: 100px;
      margin: 2.2%;
      float: left;
      text-align: center;


    }

    .berita img {
      width: 100%;
      height: 100%;
    }
  </style>
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
            <input type="submit" class="btn  btn-primary" name="simpan" value="Simpan Berita">
          </div>
        </form>

      </div>
    </div>

    <!-- Untuk Mengeluarkan Data -->

    <div class="card">
      <div class="card-header text-white bg-primary"> Berita - Berita </div>

      <div class="card-body">


        <?php
        $berita = mysqli_query($conn, "SELECT * FROM berita");
        while ($hasil = mysqli_fetch_array($berita)) {
        ?>
          <div class="p-2 m-0 border-0 bd-example">
            <div class="row">
              <div class="col-sm-4">
                <div class="card">
                  <div class="berita">
                    <img src="berita/<?php echo $hasil['foto_berita']; ?>" alt=""> <!-- Untuk Gambar -->
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <div class="card-body">

                      <div class="card-title">
                        <?php echo $hasil['keterangan']  . "<br> <br>" ?>
                      </div>

                      <a href="" class="btn btn-danger"> Delete </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>

    </div>


  </div>



</body>