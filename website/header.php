<?php
session_start();
if (!isset($_SESSION['status_login'])) {
  echo "<script>window.location = ../login.php?msg=Harap Login Dahulu!' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard || SMPN 3 Talaga </title>
  <link rel="stylesheet" href="css/dash_admin2.css">
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
  <!-- Navbar -->
  <div class="navbar">
    <div class="container">
      <h2 class="nav-brand float-left"><a href="index.php"> SMPN 3 Talaga </h2></a>

      <!-- Menu -->
      <ul class="nav-menu float-left">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Dashboard</a></li>

        <li>
          <a href="">Dashboard <i class="fa fa-caret-down"></i></a>
          <ul class="dropdown">
            <li><a href="">Identitas Sekolah</a></li>
            <li><a href="">Tentang Sekolah</a></li>
            <li><a href="">Kepala Sekolah</a></li>
          </ul>
        </li>



        <li>
          <a href=""> <?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

          <ul class="dropdown">
            <li><a href="ubah-password.php">Ubah Password</a></li>
            <li><a href="logout.php">Keluar</a></li>
          </ul>
        </li>
      </ul>

      <!-- Akhir Menu -->
      <div class="clearfix"></div>
    </div>

  </div>