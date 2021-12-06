<!DOCTYPE html>
<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
        if(($user=="admin")&&($password="admin")){
            echo "anda berhasil login";
        }
        else{
            echo "username dan password salah silahkan ulangi kembali";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMRS-Login</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
</head>
<body>
<div class="page-section">
      <div class="container">
          <form action="#" class="login-form mt-6" method="post">
              <h3 class="text-center text-primary">LOGIN</h3>
              <h5 class="text-center text-primary">SISTEM MANAJEMEN RUMAH SAKIT</h5>
              <div class="col-sm-12 py-2 wow fadeInUp">
                  <input type="text" id="username" class="form-control" placeholder="Masukan username" name="username"></input>
              </div>
              <div class="col-sm-12 py-2 wow fadeInUp">
                  <input type="password" id="password" class="form-control" placeholder="Masukan password" name="password"></input>
              </div>
              <button type="submit" class="btn btn-primary wow zoomIn position" name="submit">Login</button><br>
              <a href="{{url('registrasi')}}" class="text-primary position">Tidak Punya akun klik disini</a>
          </form>
      </div>
  </div>
</body>
</html>