<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Beranda || SMPN 3 Talaga </title>
  <link rel="stylesheet" href="css/index.css">
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

  <!-- Foto Utama yang bisa bergerak -->
  <main>
    <br>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="500">

          <center> <img src="media/fotoutama/4.jpeg" alt="" margin="auto"> </center>

          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>

        <div class="carousel-item active" data-bs-interval="500">

          <center> <img src="media/fotoutama/4.jpeg" alt="" margin="auto"> </center>

          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>

        <div class="carousel-item active" data-bs-interval="500">

          <center> <img src="media/fotoutama/4.jpeg" alt="" margin="auto"> </center>

          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

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

    <!-- Berita -->
    <div class="p-2 m-0 border-0 bd-example">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="media/prestasi/Pres1.jpeg" alt="">
            <title>Card image cap</title>
            <rect width="100%" height="100%" fill="#868e96"></rect>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Perlombaan Pramuka SMPN 3 Talaga </h5>
              <!-- <p class=" card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <img src="media/kegiatan/4.jpeg" alt="">
            <title>Card image cap</title>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Pengabdian di SMPN 3 Talaga </h5>
              <!-- <p class="card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="pengabdian.php" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <img src="media/kegiatan/futsalputri.jpeg" alt="">
            <title>Card image cap</title>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Sparing Futsal Putri </h5>
              <!-- <p class="card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="p-2 m-0 border-0 bd-example">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="media/kegiatan/Lietasii.jpg" alt="">
            <title> Card image cap </title>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Kegiatan Literasi Sekolah </h5>
              <!-- <p class="card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="literasi.php" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <img src="media/kegiatan/futsalputra.jpeg" alt="">
            <title> Card image cap </title>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Sparing Futsal Putra </h5>
              <!-- <p class="card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <img src="media/kegiatan/Literasi.jpg" alt="">
            <title>Card image cap</title>
            <div class="card-body">
              <h5 class="card-title" style="color: black;"> Kegiatan Kultum (Kuliah Tujuh menit) </h5>
              <!-- <p class="card-text" style="color: black;">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p> -->
              <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <!-- <div class="p-5  border-0">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Card image cap</title>
              <rect width="100%" height="100%" fill="#868e96"></rect>
            </svg>
            <div class="card-body">
              <h5 class="card-title">Card with stretched link</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
    </div>
    </div>
    </div>
    </div>
    </div> -->

  </main>

  <br>

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

<!-- Perlombaan
1. Paduan Suara Juara 1
2. Pramuka Juara 3
3. PBB Juara 3
4. -->