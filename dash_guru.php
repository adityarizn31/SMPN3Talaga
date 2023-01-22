<?php

include 'koneksi.php';

$nama = "";
$tempatlahir  = "";
$tanggallahir = "";
$jeniskelamin = "";
$agama        = "";
$alamat       = "";
$username     = "";
$passwordd    = "";
$email        = "";
$matpel       = "";

$sukses       = "";
$error        = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = '';
}

// Untuk membuat data
if (isset($_POST['simpan'])) {
  $nama           = $_POST['nama'];
  $tempatlahir    = $_POST['tempatlahir'];
  $tanggallahir   = $_POST['tanggallahir'];
  $jeniskelamin   = $_POST['jeniskelamin'];
  $agama          = $_POST['agama'];
  $alamat         = $_POST['alamat'];
  $username       = $_POST['username'];
  $passwordd      = $_POST['passwordd'];
  $email          = $_POST['email'];
  $matpel         = $_POST['matpel'];

  if ($nama && $tempatlahir && $tanggallahir && $agama && $alamat && $username && $passwordd && $email && $matpel) {
    if ($op == 'edit') {
      $sql1     = "UPDATE guru SET
      id            = '$id', 
      nama          = '$nama',
      tempatlahir   = '$tempatlahir',
      tanggallahir  = '$tanggallahir',
      jeniskelamin  = '$jeniskelamin',
      agama         = '$agama',
      alamat        = '$alamat',
      username      = '$username',
      passwordd     = '$passwordd',
      email         = '$email',
      matpel        = '$matpel'
      WHERE id      = '$id'";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses   = "Data berhasil di Update";
      } else {
        $error    = "Data gagal di Update";
      }
    } else {
      $sql1 = "INSERT INTO guru (nama, tempatlahir, tanggallahir, jeniskelamin, agama, alamat, username, passwordd, email, matpel) VALUES
      ('$nama', '$tempatlahir', '$tanggallahir', '$jeniskelamin', '$agama', '$alamat', '$username', '$passwordd', '$email', '$matpel')";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses   = "Berhasil Menginput Data";
      } else {
        $error    = "Gagal Menginputkan Data";
      }
    }
  } else {
    $error        = "Silahkan Menginputkan Semua Data";
  }
}

// Untuk Edit Data
if ($op == 'edit') {
  $id       = $_GET['id'];
  $sql1     = "SELECT * FROM guru WHERE id = '$id'";
  $q1       = mysqli_query($conn, $sql1);
  $r1       = mysqli_fetch_array($q1);
  $id       = $r1['id'];
  $nama       = $r1['nama'];
  $tempatlahir       = $r1['tempatlahir'];
  $tanggallahir       = $r1['tanggallahir'];
  $jeniskelamin       = $r1['jeniskelamin'];
  $agama       = $r1['agama'];
  $alamat       = $r1['alamat'];
  $username       = $r1['username'];
  $passwordd       = $r1['passwordd'];
  $email       = $r1['email'];
  $matpel       = $r1['matpel'];

  if ($id == '') {
    $error = "Data tidak ditemukan!! ";
  }
}

if ($op == 'delete') {
  $id       = $_GET['id'];
  $sql1     = "DELETE FROM guru WHERE id = '$id'";
  $q1       = mysqli_query($conn, $sql1);
  if ($q1) {
    $sukses  = "Berhasil Menghapus Data";
  } else {
    $error  = "Gagal Menghapus Data";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Guru || SMPN 3 Talaga </title>
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

  <!-- Bagian Edit Data -->
  <div class="mx-auto">
    <div class="card">

      <div class="card-header">
        <p class="float-start">Edit Laporan</p>
        <a href="dashboard_admin.php"><button type="" class="btn btn-secondary float-end">Back</button></a>
        <h3 class="text-center float"> Daftar Guru </h3>
      </div>

      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:10;url=dash_guru.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:10;url=dash_guru.php");
        }
        ?>

        <form action="" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label"> Nama Lengkap </label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo $nama ?>">
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="tempatlahir" class="form-label"> Tempat Lahir </label>
              <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" aria-describedby="tempatlahir" value="<?php echo $tempatlahir ?>">
            </div>

            <div class="col-md-6">
              <label for="tanggallahir" class="form-label"> Tanggal Lahir </label>
              <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" aria-describedby="tanggallahir" value="<?php echo $tanggallahir ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="jenisk" class="form-label"> Jenis Kelamin </label> <br>

            <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Laki-laki"><?php if ($jeniskelamin == "Laki-Laki") ?>
            <label for="Laki"> Laki - Laki </label> <br>

            <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Perempuan"><?php if ($jeniskelamin == "Perempuan") ?>
            <label for="Perempuan"> Perempuan </label>
          </div>

          <div class="mb-3 row">
            <label for="agama" class="col-sm-2 col-form-label"> Agama </label>
            <div class="col-sm-10">
              <select class="form-control" id="agama" name="agama" aria-describedby="agama">
                <option value="pilih">-- Pilih --</option>
                <option value="Islam" <?php if ($agama == "Islam") echo "selected" ?>> Islam </option>
                <option value="Kristen" <?php if ($agama == "Kristen") echo "selected" ?>> Kristen </option>
                <option value="Hindu" <?php if ($agama == "Hindu") echo "selected" ?>> Hindu </option>
                <option value="Budha" <?php if ($agama == "Budha") echo "selected" ?>> Budha </option>
                <option value="Konghucu" <?php if ($agama == "Konghucu") echo "selected" ?>> Konghucu </option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label"> Alamat </label> <br>
            <textarea cols="139" rows="10" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" value="<?php echo $alamat ?>"></textarea>
          </div>


          <div class="mb-3">
            <label for="InputAyah" class="form-label"> Username </label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="username" value="<?php echo $username ?>">
          </div>

          <div class="mb-3">
            <label for="InputIbu" class="form-label"> Password </label>
            <input type="text" class="form-control" id="passwordd" name="passwordd" aria-describedby="passwordd" value="<?php echo $passwordd ?>">
          </div>

          <div class="mb-3">
            <label for="pekerjaanayah" class="form-label"> Email </label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="<?php echo $email ?>">
          </div>

          <div class="mb-3">
            <label for="matpel" class="form-label"> Mata Pelajaran </label>
            <input type="text" class="form-control" id="matpel" name="matpel" aria-describedby="matpel" value="<?php echo $matpel ?>">
          </div>

          <div class="col-12">
            <input type="submit" name="simpan" id="simpan" value="Simpan Data" class="btn btn-primary">
          </div>

        </form>
      </div>
    </div>

    <!-- Untuk Mengeluarkan Data -->
    <div class="card">
      <div class="card-header text-white bg-primary">
        Data Guru
      </div>

      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Email</th>
              <th scope="col">Mata Pelajaran</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM guru ORDER BY id DESC";
            $q2   = mysqli_query($conn, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id           = $r2['id'];
              $nama         = $r2['nama'];
              $tempatlahir  = $r2['tempatlahir'];
              $tanggallahir = $r2['tanggallahir'];
              $jeniskelamin = $r2['jeniskelamin'];
              $agama        = $r2['agama'];
              $alamat       = $r2['alamat'];
              $username     = $r2['username'];
              $passwordd    = $r2['passwordd'];
              $email        = $r2['email'];
              $matpel       = $r2['matpel'];
            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <th scope="row"><?php echo $nama ?></th>
                <th scope="row"><?php echo $tempatlahir ?></th>
                <th scope="row"><?php echo $tanggallahir ?></th>
                <th scope="row"><?php echo $jeniskelamin ?></th>
                <th scope="row"><?php echo $agama ?></th>
                <th scope="row"><?php echo $alamat ?></th>
                <th scope="row"><?php echo $username ?></th>
                <th scope="row"><?php echo $passwordd ?></th>
                <th scope="row"><?php echo $email ?></th>
                <th scope="row"><?php echo $matpel ?></th>
                <th scope="row">
                  <a href="dash_guru.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                  <a href="dash_guru.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data ??')"><button type="button" class="btn btn-danger">Delete</button></a>
                </th>
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