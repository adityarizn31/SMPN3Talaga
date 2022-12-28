<?php

include 'koneksi.php';

// Pendefinisian Variabel
$id           = "";
$nama         = "";
$tempatlahir  = "";
$tanggllahir  = "";
$jeniskelamin = "";
$agama        = "";
$alamat       = "";
$username     = "";
$password     = "";
$email        = "";
$sukses       = "";
$error        = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = '';
}


// Untuk Create Data
if (isset($_POST['simpan'])) {
  $nama           = $_POST['nama'];
  $tempatlahir    = $_POST['tempatlahir'];
  $tanggallahir    = $_POST['tanggallahir'];
  $jeniskelamin   = $_POST['jeniskelamin'];
  $agama          = $_POST['agama'];
  $alamat         = $_POST['alamat'];
  $username      = $_POST['username'];
  $password       = $_POST['password'];
  $email       = $_POST['email'];


  if ($nama && $tempatlahir && $tanggallahir && $jeniskelamin && $agama && $alamat && $username && $password && $email) {
    if ($op == 'edit') { // Untuk Update
      $sql1   = "UPDATE guru SET 
      id   = '$id', 
      nama = '$nama', 
      tempatlahir = '$tempatlahir', 
      tanggallahir = '$tanggallahir', 
      jeniskelamin = '$jeniskelamin', 
      agama = '$agama', 
      alamat = '$alamat', 
      username = '$username', 
      password = '$password', 
      email = '$email' WHERE id = '$id'";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses = "Data berhasil diupdate";
      } else {
        $error = "Data gagal diupdate";
      }
    } else {
      $sql1 = "INSERT INTO guru (nama, tempatlahir, tanggallahir, jeniskelamin, agama, alamat, username, password, email) VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$jeniskelamin', '$agama', '$alamat', '$username', '$password', '$email')";
      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses = "Berhasil memasukan Data";
      } else {
        $error = "Gagal memasukan Data";
      }
    }
  } else {
    $error = "Silahkan masukan semua data";
  }
}

// Untuk Edit Data
if ($op == 'edit') {
  $id             = $_GET['id'];
  $sql1           = "SELECT * FROM ppdb WHERE id = '$id'";
  $q1             = mysqli_query($conn, $sql1);
  $r1             = mysqli_fetch_array($q1);
  $id             = $r1['id'];
  $nama           = $r1['nama'];
  $tempatlahir    = $r1['tempatlahir'];
  $tanggallahir    = $r1['tanggallahir'];
  $jeniskelamin   = $r1['jeniskelamin'];
  $agama          = $r1['agama'];
  $alamat         = $r1['alamat'];
  $username      = $r1['username'];
  $password       = $r1['password'];
  $email = $r1['email'];

  if ($id == '') {
    $error = "Data tidak ditemukan";
  }
}

//Untuk Hapus Data
if ($op == 'delete') {
  $id     = $_GET['id'];
  $sql1   = "DELETE FROM ppdb WHERE id = '$id'";
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
  <title>Hasil PPDB || SMPN 3 Talaga</title>
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

  <!-- Bagian Edit Data -->
  <div class="mx-auto">
    <div class="card">
      <div class="card-header">
        Edit Data
        <a href="dashadmin.php"><button type="button" class="btn btn-secondary float-end">Back</button></a>

      </div>
      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:5;url=hasilppdb.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:5;url=hasilppdb.php");
        }
        ?>

        <!-- Untuk Input Data -->
        <form action="" method="POST">

          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label"> Nama </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tempatlahir" class="col-sm-2 col-form-label"> Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" value="<?php echo $tempatlahir ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tanggalahir" class="col-sm-2 col-form-label"> Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tanggalahir" id="tanggalahir" value="<?php echo $tanggallahir ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <!-- <input type="text" class="form-control" name="jeniskelamin" id="jeniskelamin" value="<?php echo $jeniskelamin ?>"> -->
              <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Laki-laki"> <?php if ($jeniskelamin == "Laki-Laki") ?>
              <label for="Laki"> Laki - Laki </label> <br>

              <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Perempuan"> <?php if ($jeniskelamin == "Perempuan") ?>
              <label for="Perempuan"> Perempuan </label>
            </div>
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

          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama_ayah" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $username ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama_ibu" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $password ?>">
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
        Data Pendaftaran
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM guru ORDER BY id DESC";
            $q2 = mysqli_query($conn, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id             = $r2['id'];
              $nama           = $r2['nama'];
              $tempatlahir    = $r2['tempatlahir'];
              $tanggallahir   = $r2['tanggallahir'];
              $jeniskelamin   = $r2['jeniskelamin'];
              $agama          = $r2['agama'];
              $alamat         = $r2['alamat'];
              $username       = $r2['username'];
              $password       = $r2['password'];
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
                <th scope="row"><?php echo $password ?></th>
                <td scope="row">
                  <a href="hasilppdb.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                  <a href="hasilppdb.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data ??')"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
          </thead>
        </table>

        </form>
      </div>
    </div>

  </div>

</body>

</html>