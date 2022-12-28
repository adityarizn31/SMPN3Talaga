<?php

include 'koneksi.php';

if (isset($_POST['upload'])) {
  $folder = './kepsekfoto/';
  $name_p = $_FILES['foto']['name'];
  $rename = date('Hs') . $name_p;
  $sumber_p = $_FILES['foto']['tmp_name'];
  move_uploaded_file($sumber_p, $folder . $rename);
  $insert = mysqli_query($conn, "INSERT INTO profil (keterangan) VALUES (NULL,'" . $_POST['kepsek'] . "','" . $_POST['keterangan'] . "','" . $rename . "',NULL)");
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

        <form action="" method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="kepsek" class="form-label"> Nama Kepala Sekolah </label>
            <input type="text" class="form-control" id="kepsek" name="kepsek" aria-describedby="kepsek">
          </div>

          <div class="mb-3">
            <label for="keterangan" class="form-label"> Keterangan </label>
            <textarea name="129" rows="10" class="form-control" id="keterangan" name="keterangan"></textarea>
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label"> Gambar </label> <br>
            <input type="file" name="foto" id="">
          </div>

          <div class="col-12">
            <input type="submit" name="upload" id="upload" class="btn btn-primary">
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
                  <img src="kepsekfoto/<?php echo $hasil['foto_kepsek']; ?>" alt="" style="float: left; width: 300px;height: 300px;margin: 2%;">
                  <div class="kepsek">
                    <h3> Saepudin, S.Pd., M.M. </h3>
                    <?php echo $hasil['nama'] ?>
                  </div>
                  <div class="teks">
                    <!-- <p class="justify">
                    Pendidikan merupakan pilar penting bagi peradaban bangsa. Maju mundurnya suatu bangsa bisa ditentukan dengan perkembangan
                    Ilmu Pengetahuan yang dimiliki oleh sumber daya manusia dan puncak dari ilmu pengetahuan itu adalah ahlak mulia yang melekat sebagai karakter bangsa.
                    Memasuki dunia Industri 4.0 dan pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental generasi - generasi ini masa depan agar mampu bersaing dengan baik.
                    Sebagai salah satu lembaga pendidikan di Talaga, SMP Negeri 3 Talaga ini berupaya meningkatkan kualitas dan kuantitas sebagai bagian dari pilar penting yang membangun kualitas sumber daya manusia. -->
                    <?php echo $hasil['keterangan'] . "<br> <br>" ?>
                    </p>
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

</html>