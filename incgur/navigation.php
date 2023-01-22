<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="container">
      <h2 class="nav-brand float-left"><a href="index.php"> SMPN 3 Talaga </h2></a>

      <!-- Menu -->
      <ul class="nav-menu float-left">
        <li>
          <a href=""> <?= $_SESSION['uname'] ?> (<?= $_SESSION['umatpel'] ?>) <i class="fa fa-caret-down"></i></a>
          <ul class="dropdown float-right">
            <li><a href="ubah-password.php">Ubah Password</a></li>
            <li><a href="logout.php">Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>