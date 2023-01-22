<?php

include 'koneksi.php';

// Pendefinisian Variabel
$tanggal            = "";
$guru               = "";
$materi             = "";
$waktu              = "";
$siswa              = "";
$sukses             = "";
$error              = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = '';
}

// Untuk Create Data
if (isset($_POST['simpan'])) {
  $tanggal        = $_POST['tanggal'];
  $guru           = $_POST['guru'];
  $materi         = $_POST['materi'];
  $waktu          = $_POST['waktu'];
  $siswa          = $_POST['siswa'];

  if ($tanggal && $guru && $materi && $waktu && $siswa) {
    if ($op == 'edit') { // Untuk Update
      $sql1       = "UPDATE administrasi SET 
      id          = '$id', 
      tanggal     = '$tanggal', 
      guru        = '$guru', 
      materi      = '$materi', 
      waktu       = '$waktu', 
      siswa       = '$siswa' 
      WHERE id    = '$id'";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses   = "Data berhasil diupdate";
      } else {
        $error    = "Data gagal diupdate";
      }
    } else {
      $sql1 = "INSERT INTO administrasi (tanggal, guru, materi, waktu, siswa) VALUES ('$tanggal', '$guru', '$materi', '$waktu', '$siswa')";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses   = "Berhasil memasukan Data";
      } else {
        $error    = "Gagal memasukan Data";
      }
    }
  } else {
    $error        = "Silahkan masukan semua data";
  }
}

// Untuk Edit Data
if ($op == 'edit') {
  $id             = $_GET['id'];
  $sql1           = "SELECT * FROM administrasi WHERE id = '$id'";
  $q1             = mysqli_query($conn, $sql1);
  $r1             = mysqli_fetch_array($q1);
  $id             = $r1['id'];
  $tanggal        = $r1['nama'];
  $guru           = $r1['tempatlahir'];
  $materi         = $r1['tanggalahir'];
  $waktu          = $r1['jeniskelamin'];
  $siswa          = $r1['agama'];

  if ($id == '') {
    $error        = "Data tidak ditemukan";
  }
}

//Untuk Hapus Data
if ($op == 'delete') {
  $id             = $_GET['id'];
  $sql1           = "DELETE FROM administrasi WHERE id = '$id'";
  $q1             = mysqli_query($conn, $sql1);
  if ($q1) {
    $sukses       = "Berhasil hapus data!!";
  } else {
    $error        = "Gagal hapus data!!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Administrasi || SMPN 3 Talaga </title>
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
    }
  </style>
</head>

<body>

  <div class="mx-auto">
    <div class="card">

      <div class="card-header">
        <p class="float-start">Edit Laporan</p>
        <a href="dashboard_guru.php"><button type="" class="btn btn-secondary float-end">Back</button></a>
        <h3 class="text-center float"> Administrasi Pembelajaran </h3>
      </div>

      <div class="card-body">

        <?php if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:10;url=guru_pembelajaran.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:10;url=guru_pembelajaran.php");
        }
        ?>

        <!-- Untuk Input Data -->
        <form action="" method="POST">

          <div class="mb-3">
            <label for="tanggal" class="col-sm-2 col-form-label"> Tanggal </label>
            <div class="col-sm-12">
              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="guru" class="col-sm-2 col-form-label"> Guru </label>
            <div class="col-sm-12">
              <input type="text" class="form-control" name="guru" id="guru" value="<?php echo $guru ?>">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="tempatlahir" class="form-label"> Materi </label>
              <input type="text" class="form-control" name="materi" id="materi" value="<?php echo $materi ?>">
            </div>
            <div class="col-md-6">
              <label for="tanggallahir" class="form-label"> Waktu Pembelajaran </label>
              <input type="text" class="form-control" name="waktu" id="waktu" value="<?php echo $waktu ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="siswa" class="col-sm-2 col-form-label"> Kehadiran Siswa Siswi </label>
            <div class="col-sm-12">
              <input type="text" cols="140" rows="10" class="form-control" name="siswa" id="siswa" placeholder="Nama Keterangan, Nama Keterangan " value="<?php echo $siswa ?>">
            </div>
          </div>

          <div class="col-12">
            <input type="submit" name="simpan" id="simpan" value="Simpan Data" class="btn btn-primary">
          </div>

        </form>
      </div>
    </div>

    <!-- Untuk Mengeluarkan Data -->
    <div class="card">
      <div class="card-header text-white bg-secondary">
        Data Pembelajaran
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Guru</th>
              <th scope="col">Materi</th>
              <th scope="col">Waktu Pembelajaran</th>
              <th scope="col">Kehadiran Siswa Siswi</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM administrasi ORDER BY id DESC";
            $q2 = mysqli_query($conn, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id       = $r2['id'];
              $tanggal  = $r2['tanggal'];
              $guru     = $r2['guru'];
              $materi   = $r2['materi'];
              $waktu    = $r2['waktu'];
              $siswa    = $r2['siswa'];
            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <th scope="row"><?php echo $tanggal ?></th>
                <th scope="row"><?php echo $guru ?></th>
                <th scope="row"><?php echo $materi ?></th>
                <th scope="row"><?php echo $waktu ?></th>
                <th scope="row"><?php echo $siswa ?></th>
                <td scope="row">
                  <a href="dash_pembelajaran.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                  <a href="dash_pembelajaran.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data ??')"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
          </thead>
        </table>
      </div>
    </div>
  </div>

</body>

</html>