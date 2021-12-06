<!DOCTYPE html>
<html lang="en">
  <!--penggunaan override-->
  <?php
    class MenuSMRS{
      public function menu1(){
        return "Menu";
      }
    }
    class Home extends MenuSMRS{
      public function menuhome(){
        return "Home";
      }
    }
    class Pelayanan extends MenuSMRS{
      public function menupelayanan(){
        return "Pelayanan";
      }
    }
    class Artikel extends MenuSMRS{
      public function menuartikel(){
        return "Artikel";
      }
    }
    class Kontak extends MenuSMRS{
      public function menuKontak(){
        return "Kontak";
      }
    }
    class Tentang extends MenuSMRS{
      public function menutentang(){
        return "Tentang";
      }
    }
  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMRS - LANUD KALIJATI SUBANG</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
  <div class="back-to-top"></div>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> (0260) 460364 </a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> smrs.lanudkalijati@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-instagra"></span></a>
            </div>
          </div>
        </div>
        
        <nav class='navbar navbar-expand-lg navbar-light shadow-sm'>
          <div class="container">
            <a href="#" class="navbar-brand"><span class="text-primary">Healthy</span>Click</a>
            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Silahkan ketikan sesuatu" aria-label="Username" aria-describedby="icon-addon1">
              </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupport" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="{{ url('home')}}" class="nav-link">
                    <?php
                      $menusmrs=new Home();
                      echo $menusmrs->menuhome();
                    ?>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('pelayanan')}}" class="nav-link">
                    <?php
                      $menusmrs=new Pelayanan();
                      echo $menusmrs->menupelayanan();
                    ?>
                  </a>
                </li>
                <li class="nav-item active">
                  <a href="{{ url('articlepage')}}" class="nav-link">
                    <?php
                      $menusmrs=new Artikel();
                      echo $menusmrs->menuartikel();
                    ?>
                  </a>
                </li>
                <li>
                  <a href="{{ url('contact')}}" class="nav-link">
                    <?php
                      $menusmrs=new Kontak();
                      echo $menusmrs->menuKontak();
                    ?>
                  </a>
                </li>
                <li>
                  <a href="{{ url('about')}}" class="nav-link">
                    <?php
                      $menusmrs=new Tentang();
                      echo $menusmrs->menutentang();
                    ?>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{url('login')}}">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav class="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html" href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page" href="{{url('artikel')}}">Artikel</li>
          </ol>
          <h4 class="font-weight-normal">Artikel</h4>
          <h1 class="font-weight-normal">COVID-19 di Indonesia</h1>
        </nav>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">ARTIKEL COVID-19</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="#" class="post-tumb">
                <img src="../assets/img/indocovid.jpg" class="height:40 weight: 40" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('detail1')}}" class="text-light">Kasus corona naik, begini datanya pada bulan november lalu</a></h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="./assets/img/omicron.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{ url('detail2')}}" class="text-light">Mengenal varian baru Omicron dan bahayanya</a></h5>
              <br>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="./assets/img/saudi.jpg" alt="">
              </a>
            </div>
            <div class="body"> 
                <h5 class="post-title"><a href="{{url('detail3')}}" class="text-light">Jabar dan Jatim jadi provinsi tertinggi kasus covid-19</a></h5>
                <br>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>PELAYANAN MEDIS</h5>
          <ul class="footer-menu">
            <li><a href="">IGD/PONEK</a></li>
            <li><a href="">Rawat Jalan</a></li>
            <li><a href="">Rawat Inap</a></li>
            <li><a href="">Pelayanan Medical Check Up</a></li>
            <li><a href="">Painless Labour (Persalinan Tanpa Rasa Sakit)</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>PELAYANAN PENUNJANG MEDIS</h5>
          <ul class="footer-menu">
            <li><a href="">Radiologi</a></li>
            <li><a href="">Rehabilitasi Medis</a></li>
            <li><a href="">Konsultasi Gizi</a></li>
            <li><a href="">Rekam Medis</a></li>
            <li><a href="">Central Sterile Supply Unit (CSSU)</a></li>
            <li><a href="">Intensive Care Unit (ICU)</a></li>
            <li><a href="">Intalasi Bedah Sentral</a></li>
            <li><a href="">Farmasi</a></li>
            <li><a href="">Laboratorium</a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5>PELAYANAN NON PENUNJANG MEDIS</h5>
          <ul class="footer-menu">
            <li><a href="">Pemulasaran Jenazah</a></li>
            <li><a href="">Ambulans</a></li>
            <li><a href="">Pemeliharaan Sarana Prasana</a></li>
            <li><a href="">Pengelola Limbah</a></li>
          </ul>
        </div>
        
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>KONTAK</h5>
          <p class="footer-link mt-2">Jalan Kalijati Subang</p>
          <a href="" class="footer-link">(0260) 460364</a>
          <a href="" class="footer-link">smrs.lanukalijati@gmail.com</a>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_black"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_black"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_black"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
      <hr>
      <p id="copyright">Copyright &copy; 2021 <a href="" target="_blank">TATAN TANUWIJAYA</a></p>
    </div>
  </footer>

</body>
</html>a