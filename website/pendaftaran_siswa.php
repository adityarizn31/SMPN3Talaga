<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
  $insert = mysqli_query($conn, "INSERT INTO ppdb (nik, nokk, nisn, nama, tempatlahir, tanggalahir, jeniskelamin, agama, alamat, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu) VALUES (
    '" . $_POST['nik'] . "',
    '" . $_POST['nokk'] . "',
    '" . $_POST['nisn'] . "',
    '" . $_POST['nama'] . "',
    '" . $_POST['tempatlahir'] . "', 
    '" . $_POST['tanggallahir'] . "', 
    '" . $_POST['jenisk'] . "', 
    '" . $_POST['agama'] . "', 
    '" . $_POST['alamat'] . "', 
    '" . $_POST['ayah'] . "', 
    '" . $_POST['ibu'] . "', 
    '" . $_POST['pekerjaanayah'] . "', 
    '" . $_POST['pekerjaanibu'] . "' 
    )");

  if (mysqli_affected_rows($conn) > 0) {
    echo 'Data telah berhasil ditambah!!';
  } else {
    echo 'Data gagal ditambah!!' . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Pendaftaran Siswa || SMPN 3 Talaga </title>
  <link rel="stylesheet" href="css/pendaftaran_siswa.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="media/fotoheader/Logo SMPN 3 Talaga.png" alt=" Logo SMPN 3 Talaga" width="100px" height="100px">
      <a class="navbar-brand" href="#"> SMPN 3 TALAGA </a>

      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"> Beranda </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pendaftaran.php"> PPDB </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profil.php"> Profil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="kurikulum.php"> Kurikulum </a>
          </li>

        </ul>

        <div class="admin">
          <a href="login.php">
            <button class="btn btn-outline-success" type="submit"> Admin </button>
          </a>
        </div>

      </div>
    </div>
  </nav>



  <div class="p-5-5-5  m-5 border-4 bd-example">
    <center>
      <legend> Pendaftaran Siswa Siswi Baru </legend>
    </center>
    <div class="row">

      <form action="" method="POST">

        <div class="mb-3">
          <label for="nik" class="form-label"> NIK </label>
          <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nik">
        </div>

        <div class="mb-3">
          <label for="nisn" class="form-label"> NO KK </label>
          <input type="text" class="form-control" id="nokk" name="nokk" aria-describedby="nokk">
        </div>

        <div class="mb-3">
          <label for="nisn" class="form-label"> NISN </label>
          <input type="text" class="form-control" id="nisn" name="nisn" aria-describedby="nisn">
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label"> Nama Lengkap </label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
        </div>

        <div class="form-group row">
          <div class="col-md-6">
            <label for="tempatlahir" class="form-label"> Tempat Lahir </label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" aria-describedby="tempatlahir">
          </div>
          <div class="col-md-6">
            <label for="tanggallahir" class="form-label"> Tanggal Lahir </label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" aria-describedby="tanggallahir">
          </div>
        </div>

        <div class="mb-3">
          <label for="jenisk" class="form-label"> Jenis Kelamin </label> <br>

          <input type="radio" id="jenisk" name="jenisk" value="Laki-laki">
          <label for="Laki"> Laki - Laki </label> <br>

          <input type="radio" id="jenisk" name="jenisk" value="Perempuan">
          <label for="Perempuan"> Perempuan </label>
        </div>

        <div class="mb-3">
          <label for="agama" class="form-label"> Agama </label>
          <select class="form-control" id="agama" name="agama" aria-describedby="agama">
            <option value="pilih">-- Pilih --</option>
            <option value="Islam"> Islam </option>
            <option value="Kristen"> Kristen </option>
            <option value="Hindu"> Hindu </option>
            <option value="Budha"> Budha </option>
            <option value="Konghucu"> Konghucu </option>
          </select>
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label"> Alamat </label> <br>
          <textarea cols="139" rows="10" class="form-control" id="alamat" name="alamat" aria-describedby="alamat"></textarea>
        </div>


        <div class="mb-3">
          <label for="InputAyah" class="form-label"> Nama Ayah </label>
          <input type="text" class="form-control" id="ayah" name="ayah" aria-describedby="ayah">
        </div>

        <div class="mb-3">
          <label for="InputIbu" class="form-label"> Nama Ibu </label>
          <input type="text" class="form-control" id="ibu" name="ibu" aria-describedby="ibu">
        </div>

        <div class="mb-3">
          <label for="pekerjaanayah" class="form-label"> Pekerjaan Ayah </label>
          <input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah" aria-describedby="pekerjaanayah">
        </div>

        <div class="mb-3">
          <label for="pekerjaanibu" class="form-label"> Pekerjaan Ibu </label>
          <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" aria-describedby="pekerjaan">
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="submit" name="submit">Daftar</button>
        </div>

      </form>
    </div>
  </div>

</body>

<br>

<!-- Footer -->
<footer>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Whatsapp -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <img src="media/sosmed/wa.png" alt="" style="height: 30px; width:30px;">
        </a>

        <!-- Youtube -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <img src="media/sosmed/yt.png" alt="" style="height: 30px; width:30px;">
        </a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <img src="media/sosmed/ig.png" alt="" style="height:30px; width:30px;">
        </a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Text -->
      <section class="mb-4">
        <p style="color: white;">
          Hubungi Kami <br>
          SMP Negeri 3 Talaga Jl. Gunungmanik, Kec. Talaga, Kabupaten Majalengka, Jawa Barat 45463
        </p>
      </section>
      <!-- Section: Text -->

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2462759658624!2d108.35044131406863!3d-6.9802399949573815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3c1e38090091%3A0xd038be338ff92aa2!2sSMP%20Negeri%203%20Talaga!5e0!3m2!1sid!2sid!4v1664685669534!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Kolom Pertama -->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <!-- <h5 style="color: white;">Links</h5> -->

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Beranda</a>
              </li>
              <li>
                <a href="#!" class="text-white">FAQ</a>
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 3</a> -->
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 4</a> -->
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!-- Kolom Kedua -->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <!-- <h5 style="color: white;">Links</h5> -->

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#" class="text-white no-underline">Tentang Kami</a>
              </li>
              <li>
                <a href="#!" class="text-white">Pendaftaran</a>
              </li>
              <li>
                <a href="#!" class="text-white">Kebijakan</a>
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 4</a> -->
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!-- Kolom Ketiga -->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <!-- <h5 style="color: white;">Links</h5> -->

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Berita</a>
              </li>
              <li>
                <a href="#!" class="text-white">Program</a>
              </li>
              <li>
                <a href="#!" class="text-white">Privasi</a>
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 4</a> -->
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!-- Kolom Keempat -->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <!-- <h5 style="color: white;">Links</h5> -->

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Pengumuman</a>
              </li>
              <li>
                <a href="#!" class="text-white">Syarat dan Ketentuan</a>
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 3</a> -->
              </li>
              <li>
                <!-- <a href="#!" class="text-white">Link 4</a> -->
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">SMP Negeri 3 Talaga</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</footer>