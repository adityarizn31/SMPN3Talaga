<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Profil || SMPN 3 Talaga </title>
  <link rel="stylesheet" href="css/profil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

  <main>
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
              <a class="nav-link active" aria-current="page" href="pendaftaran_siswa.php"> PPDB </a>
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

    <!-- Isi -->
    <div class="gambar">
      <img class="proftengah" src="media/ruangan/lap.jpg" alt="" style="width: 100%; height:100%; padding:40px;">
    </div>

    <div class="clearfix"></div>

    <div class="p-3 m-0 border-0 bd-example">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Visi Misi SMPN 3 Talaga
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              <strong> Visi </strong>
              <ul>
                <li> Religiotas, Berprestasi Tinggi, Berbudaya dan Berwawasan Lingkungan </li>
              </ul>

              <strong> Misi </strong>
              <ul>
                <li> Menumbuhkan karakter warga sekolah yang Agamis, Cerdas, Disiplin dan Cinta Tanah Air </li>
                <li> Mengembangkan pembelajaran yang Aktif, Kreatif dan Inovatif dengan mendayagunakan IPTEK dan lingkungan </li>
                <li> Membangun sekolah yang Demokratis dan Berbudaya Nasional </li>
                <li> Melaksanakan pembelajaran Pendidikan lingkungan hidup </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Infrastruktur
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">

            <strong class="text-right"> Laboratorium Ipa </strong>
            <div class="accordion-body">
              <!-- Laboratorium Ipa -->
              <p style="text-align:justify;padding-bottom: 10%"><img src="media/ruangan/labipa.jpg" alt="" style="float:right;width:30%;height:30%;margin-left:15px;">
                Laboratorium Ipa ini sering digunakan para siswa siswi untuk melaksananakan praktikum percobaan mata pelajaran Ilmu Pengetahuan Alam.
                Fasilitas yang ada di Laboratorium tersebut sangat lengkap. Alat - alat percobaan sudah tersedia dan setiap kelas dapat menggunakannya.
              </p>
            </div>

            <br>

            <strong class="text-right"> Laboratorium Komputer </strong>
            <div class="accordion-body">
              <!-- Laboratorium Komputer -->
              <p style="text-align:justify;padding-bottom: 10%"><img src="media/ruangan/labkom.jpg" alt="" style="float:left;width:30%;height:30%;margin-right:15px;">
                Tidak hanya Laboratorium Ipa, Laboratorium Komputer pun sudah tersedia. Spesifikasi komputer sudah cukup lumayan tinggi sehingga bisa mengerjakan apapun.
                Para siswa siswi dapat menggunakannya baik ketika ANBK atau kegiatan lainnya. Jumlah komputer yang cukup banyak dan kecepatan internet yang memadai.
              </p>
            </div>

            <br>


            <div class="accordion-body">
              <!-- Mushola -->
              <strong style="text-align:left;"> Mushola </strong>
              <p style="text-align:justify;padding-bottom: 10%"><img src="media/ruangan/masjid.jpg" alt="" style="float:right;width:30%;height:30%;margin-left:15px;">
                Mushola yang ada di dalam sekolah sering digunakan untuk shalat dhuha, tadarusan bersama atau pembelajaran di luar kelas.
                Luas Mushola cukup besar sehingga bisa menampung seluruh siswa. Selain itu mushola juga berdekatan dengan kelas yang memudahkan siswa siswi ketika akan beribadah.
              </p>
            </div>

            <br>

            <div class="accordion-body">
              <!-- Kelas -->
              <strong style="text-align:right;"> Kelas </strong>
              <p style="text-align:justify;padding-bottom: 10%"><img src="media/ruangan/kelas.jpg" alt="" style="float:left;width:30%;height:30%;margin-right:15px;">
                Jumlah kelas cukup banyak yaitu 11 kelas. Satu kelas dapat memuat 25-30 orang siswa siswi.
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>


    <div class="berita" style="padding:20px; text-align:center;">

      <br>

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
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>


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
          <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Youtube -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <img src="media/sosmed/yt.png" alt="" style="height: 30px; width:30px;">
          <i class="fab fa-twitter"></i>
        </a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <img src="media/sosmed/ig.png" alt="" style="height:30px; width:30px;">
          <i class="fab fa-instagram"></i>
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
                <a href="#" class="text-white">Tentang Kami</a>
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