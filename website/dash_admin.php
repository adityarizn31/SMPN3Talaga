<?php

include 'koneksi.php';

//Pendefinisian Variabel
$id       = "";
$nama     = "";
$username = "";
$password = "";
$level    = "";
$sukses   = "";
$error    = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = '';
}

if (isset($_POST['simpan'])) {
  $nama       = $_POST['nama'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $level      = $_POST['level'];

  if ($nama && $username && $password && $level) {
    if ($op == 'edit') {
      $sql1 = "UPDATE adminn SET
      id = '$id',
      nama = '$nama',
      password = '$password',
      level = '$level' WHERE id = '$id'";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses  = "Data berhasil diupdate";
      } else {
        $error = "Data gagal diupdate";
      }
    } else {
      $sql1 = "INSERT INTO adminn (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses = "Berhasil memasukan data";
      } else {
        $error = "Gagal memasukan data";
      }
    }
  } else {
    $error = "Silahkan masukan semua data";
  }
}

// Untuk edit data
if ($op == 'edit') {
  $id       = $_GET['id'];
  $sql1     = "SELECT * FROM adminn WHERE id = '$id'";
  $q1       = mysqli_query($conn, $sql1);
  $r1       = mysqli_fetch_array($q1);
  $id       = $r1['id'];
  $nama     = $r1['nama'];
  $username = $r1['username'];
  $password = $r1['password'];
  $level    = $r1['level'];

  if ($id == '') {
    $error = "Data tidak ditemukan";
  }
}

//Untuk hapus data
if ($op == 'delete') {
  $id     = $_GET['id'];
  $sql1   = "DELETE FROM adminn WHERE id = '$id'";
  $q1     = mysqli_query($conn, $sql1);
  if ($q1) {
    $sukses = "Berhasil hapus data!!";
  } else {
    $error = "Gagal hapus data!!";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Pendaftaran Admin || SMPN 3 Talaga </title>
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
        <h3 class="text-center float"> Daftar Admin </h3>
      </div>

      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:5;url=daftar_admin.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:5;url=daftar_admin.php");
        }
        ?>

        <form action="" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label"> Nama Lengkap </label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo $nama ?>">
          </div>

          <div class=" mb-3">
            <label for="InputAyah" class="form-label"> Username </label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="user" value="<?php echo $username ?>">
          </div>

          <div class="mb-3">
            <label for="InputIbu" class="form-label"> Password </label>
            <input type="text" class="form-control" id="password" name="password" aria-describedby="pass" value="<?php echo $password ?>">
          </div>

          <div class="mb-3">
            <label for="level" class="form-label"> Level </label>
            <select class="form-control" id="level" name="level" aria-describedby="level">
              <option value="pilih">-- Pilih --</option>
              <option value="superadmin"> Super Admin </option>
              <option value="admin"> Admin </option>
            </select>
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
        Data Admin
      </div>

      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Level</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM adminn ORDER BY id DESC";
            $q2   = mysqli_query($conn, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id           = $r2['id'];
              $nama         = $r2['nama'];
              $username     = $r2['username'];
              $password     = $r2['password'];
              $level        = $r2['level'];
            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <th scope="row"><?php echo $nama ?></th>
                <th scope="row"><?php echo $username ?></th>
                <th scope="row"><?php echo $password ?></th>
                <th scope="row"><?php echo $level ?></th>
                <th scope="row">
                  <a href="daftar_admin.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                  <a href="daftar_admin.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data ??')"><button type="button" class="btn btn-danger">Delete</button></a>
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