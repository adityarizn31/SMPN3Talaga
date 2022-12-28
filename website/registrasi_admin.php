<?php

include 'koneksi.php';

$id = "";
$username  = "";
$passwordd  = "";
$error = "";
$sukses = "";

if (isset($_POST['submit'])) {
  $insert = mysqli_query($conn, "INSERT INTO adminn (username, passwordd) VALUES
  ('" . $_POST['username'] . "',
  '" . $_POST['passwordd'] . "')");

  if (mysqli_affected_rows($conn) > 0) {
    echo 'Data berhasil Ditambah !! ';
  } else {
    echo 'Data Gagal Ditambah' . mysqli_error($conn);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Register Admin || SMPN 3 Talaga </title>
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
          <img src="media/fotoheader/Logo SMPN 3 Talaga.png" alt="IMG">
        </div>


        <form class="login100-form validate-form" method="POST">

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="username" id="username" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="passwordd" id="passwordd" placeholder="Password">
            <span class=" focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="submit" value="Add">
              Register
            </button>
          </div>

          <div class="container-login100-form-btn">
            <a href="login.php">
              <button class="login100-form-btn btn-primary" type="login" name="login"><a href="login.php" class="text-white">Login</a>
              </button>
            </a>
          </div>

        </form>

      </div>
    </div>
  </div>



  <!-- <table>
                <tr>
                  <td>
                    <label for="nama"> Nama </label>
                  </td>
                  <td>
                    <input type="nama" name="nama" id="nama">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="username"> Username </label>
                  </td>
                  <td>
                    <input type="username" name="username" id="username">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="password"> Password </label>
                  </td>
                  <td>
                    <input type="password" name="password" id="password">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="konfirmasi"> Konfirmasi Password </label>
                  </td>
                  <td>
                    <input type="konfirmasi" name="konfirmasi" id="konfirmasi">
                  </td>
                </tr>

                <tr>
                  <td>

                  </td>
                </tr>

                <tr>
                  <td colspan="3">
                    <button type="submit" name="register"> Register </button>
                  </td>
                </tr> 
  </table> -->

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