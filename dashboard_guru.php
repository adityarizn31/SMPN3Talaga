<?php

include 'koneksi.php';

include './incgur/header.php';
include './incgur/navigation.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Guru || SMPN 3 Talaga</title>
</head>

<div class="content">

  <div class="container">

    <div class="box">

      <div class="box-header">Dashboard</div>

      <div class="box-body">
        <h5> Selamat Datang <?= $_SESSION['uname'] ?> Sistem Pembelajaran SMPN 3 Talaga</h5>
      </div>

    </div>

  </div>
</div>

<main>
  <div class="row">

    <div class="col-12 col-12 d-flex justify-content-center">
      <a href="guru_pembelajaran.php">
        <div class="item">
          <p class="h4 fw-bold">Pembelajaran</p>
          <img src="media/dash/notebook.png" alt="">
        </div>
      </a>
    </div>

  </div>
</main>

<?php include './includes/footer.php' ?>