<?php

include 'koneksi.php';

// Pendefinisian Variabel
$id             = "";
$nik            = "";
$nokk           = "";
$nisn           = "";
$nama           = "";
$tempatlahir    = "";
$tanggalahir    = "";
$jeniskelamin   = "";
$agama          = "";
$alamat         = "";
$alamat         = "";
$nama_ayah      = "";
$nama_ibu       = "";
$pekerjaan_ayah = "";
$pekerjaan_ibu  = "";
$error          = "";
$sukses         = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = '';
}

// Untuk Create Data
if (isset($_POST['simpan'])) {
  $nik            = $_POST['nik'];
  $nokk           = $_POST['nokk'];
  $nisn           = $_POST['nisn'];
  $nama           = $_POST['nama'];
  $tempatlahir    = $_POST['tempatlahir'];
  $tanggalahir    = $_POST['tanggalahir'];
  $jeniskelamin   = $_POST['jeniskelamin'];
  $agama          = $_POST['agama'];
  $alamat         = $_POST['alamat'];
  $nama_ayah      = $_POST['nama_ayah'];
  $nama_ibu       = $_POST['nama_ibu'];
  $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
  $pekerjaan_ibu  = $_POST['pekerjaan_ibu'];

  if ($nik && $nokk && $nisn && $nama && $tempatlahir && $tanggalahir && $jeniskelamin && $agama && $alamat && $nama_ayah && $nama_ibu && $pekerjaan_ayah && $pekerjaan_ibu) {
    if ($op == 'edit') { // Untuk Update
      $sql1   = "UPDATE ppdb SET 
      id   = '$id',
      nik = '$nik',
      nokk = '$nokk',
      nisn = '$nisn', 
      nama = '$nama', 
      tempatlahir = '$tempatlahir', 
      tanggalahir = '$tanggalahir', 
      jeniskelamin = '$jeniskelamin', 
      agama = '$agama', 
      alamat = '$alamat', 
      nama_ayah = '$nama_ayah', 
      nama_ibu = '$nama_ibu', 
      pekerjaan_ayah = '$pekerjaan_ayah',
      pekerjaan_ibu = '$pekerjaan_ibu' WHERE id = '$id'";

      $q1 = mysqli_query($conn, $sql1);
      if ($q1) {
        $sukses = "Data berhasil diupdate";
      } else {
        $error = "Data gagal diupdate";
      }
    } else {
      $sql1 = "INSERT INTO ppdb (nik, nokk, nisn, nama, tempatlahir, tanggalahir, jeniskelamin, agama, alamat, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu) VALUES ('$nik', '$nokk', '$nisn', '$nama', '$tempatlahir', '$tanggalahir', '$jeniskelamin', '$agama', '$alamat', '$nama_ayah', '$nama_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu')";
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
  $nik            = $r1['nik'];
  $nokk           = $r1['nokk'];
  $nisn           = $r1['nisn'];
  $nama           = $r1['nama'];
  $tempatlahir    = $r1['tempatlahir'];
  $tanggalahir    = $r1['tanggalahir'];
  $jeniskelamin   = $r1['jeniskelamin'];
  $agama          = $r1['agama'];
  $alamat         = $r1['alamat'];
  $nama_ayah      = $r1['nama_ayah'];
  $nama_ibu       = $r1['nama_ibu'];
  $pekerjaan_ayah = $r1['pekerjaan_ayah'];
  $pekerjaan_ibu  = $r1['pekerjaan_ibu'];

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
        <a href="dashboard_admin.php"><button type="button" class="btn btn-secondary float-end">Back</button></a>
      </div>
      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:5;url=dash_ppdb.php");
        }
        ?>

        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:5;url=dash_ppdb.php");
        }
        ?>

        <!-- Untuk Input Data -->
        <form action="" method="POST">

          <div class="mb-3">
            <label for="nik" class="form-label"> NIK </label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
          </div>

          <div class="mb-3">
            <label for="nisn" class="form-label"> NO KK </label>
            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nokk ?>">
          </div>

          <div class="mb-3">
            <label for="nisn" class="form-label"> NISN </label>
            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn ?>">
          </div>

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
              <input type="date" class="form-control" name="tanggalahir" id="tanggalahir" value="<?php echo $tanggalahir ?>">
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

          <div class="mb-3">
            <label for="alamat" class="form-label"> Alamat </label> <br>
            <textarea cols="139" rows="10" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" value="<?php echo $alamat ?>"></textarea>
          </div>

          <div class="mb-3 row">
            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $nama_ayah ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $nama_ibu ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?php echo $pekerjaan_ayah ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $pekerjaan_ibu ?>">
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
              <th scope="col">NIK</th>
              <th scope="col">NO KK</th>
              <th scope="col">NISN</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nama Ayah</th>
              <th scope="col">Nama Ibu</th>
              <th scope="col">Pekerjaan Ayah</th>
              <th scope="col">Pekerjaan Ibu</th>
              <th scope="col">Aksi</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM ppdb ORDER BY id DESC";
            $q2 = mysqli_query($conn, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id             = $r2['id'];
              $nik            = $r2['nik'];
              $nokk           = $r2['nokk'];
              $nisn           = $r2['nisn'];
              $nama           = $r2['nama'];
              $tempatlahir    = $r2['tempatlahir'];
              $tanggalahir    = $r2['tanggalahir'];
              $jeniskelamin   = $r2['jeniskelamin'];
              $agama          = $r2['agama'];
              $alamat         = $r2['alamat'];
              $nama_ayah      = $r2['nama_ayah'];
              $nama_ibu       = $r2['nama_ibu'];
              $pekerjaan_ayah = $r2['pekerjaan_ayah'];
              $pekerjaan_ibu  = $r2['pekerjaan_ibu'];
            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <th scope="row"><?php echo $nik ?></th>
                <th scope="row"><?php echo $nokk ?></th>
                <th scope="row"><?php echo $nisn ?></th>
                <th scope="row"><?php echo $nama ?></th>
                <th scope="row"><?php echo $tempatlahir ?></th>
                <th scope="row"><?php echo $tanggalahir ?></th>
                <th scope="row"><?php echo $jeniskelamin ?></th>
                <th scope="row"><?php echo $agama ?></th>
                <th scope="row"><?php echo $alamat ?></th>
                <th scope="row"><?php echo $nama_ayah ?></th>
                <th scope="row"><?php echo $nama_ibu ?></th>
                <th scope="row"><?php echo $pekerjaan_ayah ?></th>
                <th scope="row"><?php echo $pekerjaan_ibu ?></th>
                <td scope="row">
                  <a href="dash_ppdb.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                  <a href="dash_ppdb.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau hapus data ??')"><button type="button" class="btn btn-danger">Delete</button></a>
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