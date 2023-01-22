<?php

session_start();

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login || SMPN 3 Talaga </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="shortcut icon" href="media/favi/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
</head>

<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <a href="index.php">
            <img src="media/fotoheader/Logo SMPN 3 Talaga.png" alt="IMG">
          </a>
        </div>

        <form class="login100-form validate-form" action="" method="POST">
          <span class="login100-form-title">
            Admin || SMPN 3 Talaga
          </span>

          <?php
          if (isset($_GET['msg'])) {
            echo "<div class = 'alert alert-error'> " . $_GET['msg'] . " </div>";
          }
          ?>

          <div class="form-group">
            <!-- Username -->
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="user" id="user" placeholder="Username">
              <span class=" focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>

            <!-- Password -->
            <div class="wrap-input100 validate-input">
              <input class=" input100" type="password" name="pass" id="pass" placeholder="Password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
          </div>

          <!-- Button Login -->
          <div class="container-login100-form-btn">
            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Login">
          </div>
          <!-- End Button -->

          <div class="text-center p-t-136">
            <a class="txt2" href="login_guru.php">
              Login Guru
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>

        </form>

        <?php
        if (isset($_POST['submit'])) {
          $user = mysqli_real_escape_string($conn, $_POST['user']);
          $pass = mysqli_real_escape_string($conn, $_POST['pass']);

          $cek = mysqli_query($conn, "SELECT * FROM adminn WHERE username = '" . $user . "' ");
          if (mysqli_num_rows($cek) > 0) {
            $d = mysqli_fetch_object($cek);
            if (md5($pass == $d->password)) {
              $_SESSION['status_login']     = true;
              $_SESSION['uid']              = $d->id;
              $_SESSION['uname']            = $d->nama;
              $_SESSION['ulevel']           = $d->level;

              echo "<script> window.location = 'dashboard_admin.php' </script>";
            } else {
              echo '<div class ="alert alert-danger" role="alert"> Password salah </div>';
            }
          } else {
            echo '<div class="alert alert-danger" role="alert"> Username / Password tidak ada </div>';
          }
        }
        ?>

      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <script src="js/main.js"></script>

</body>

</html>