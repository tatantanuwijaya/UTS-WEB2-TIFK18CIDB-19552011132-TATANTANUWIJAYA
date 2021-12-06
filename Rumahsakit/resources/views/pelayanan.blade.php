<!DOCTYPE html>
  <!-- override -->
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
<html lang="en">
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
                    <!-- override -->
                    <?php
                      $menusmrs=new Home();
                      echo $menusmrs->menuhome();
                    ?>
                  </a>
                </li>
                <li class="nav-item active">
                  <a href="{{url('pelayanan')}}" class="nav-link">
                    <!-- override -->
                    <?php
                      $menusmrs=new Pelayanan();
                      echo $menusmrs->menupelayanan();
                    ?>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('articlepage')}}" class="nav-link">
                    <!-- override -->
                    <?php
                      $menusmrs=new Artikel();
                      echo $menusmrs->menuartikel();
                    ?>
                  </a>
                </li>
                <li>
                  <a href="{{ url('contact')}}" class="nav-link">
                    <!-- override -->
                    <?php
                      $menusmrs=new Kontak();
                      echo $menusmrs->menuKontak();
                    ?>
                  </a>
                </li>
                <li>
                  <a href="{{ url('about')}}" class="nav-link">
                    <!-- override -->
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/lobirumahsakit.jpeg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav class="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html" href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page" href="{{url('pelayanan')}}">Pelayanan</li>
          </ol>
          <h1 class="font-weight-normal">PELAYANAN DI RUMAH SAKIT LANUD KALIJATI</h1>
        </nav>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">PELAYANAN MEDIS</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/igd.jpeg" class="height:40 weight: 40" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title">
                <a class="text-light">
                  <!-- enkapsulasi -->
                  <?php
                    class Medis1{
                      private $layanan1;

                      public function getLayanan1(){
                        return $this->layanan1;
                      }
                      public function setLayanan1($layanan1Value){
                        $this->layanan1=$layanan1Value;
                      }
                    }
                    $medis=new Medis1();
                    $medis->setLayanan1("IGD / PONEK");
                    echo $medis->getLayanan1();
                  ?>
                </a>
              </h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/rawat-jalan.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title">
                <a class="text-light">
                  <!-- enkapsulasi -->
                  <?php
                    class Medis2{
                      private $layanan2;
                      public function getLayanan2(){
                        return $this->layanan2;
                      }
                      public function setLayanan2($layanan2Value){
                        $this->layanan2=$layanan2Value;
                      }
                    }
                    $medis2=new Medis2();
                    $medis2->setLayanan2("Rawat Jalan");
                    echo $medis2->getLayanan2();
                  ?>
                </a>
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/rawat-inap.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
                <h5 class="post-title">
                  <a class="text-light">
                    <!-- enkapsulasi -->
                    <?php
                      class LayananMedis3{
                        private $namalayanan3;

                        public function getNamalayanan3(){
                          return $this->namalayanan3;
                        }
                        public function setNamalayanan3($namalayanan3Value){
                          $this->namalayanan3=$namalayanan3Value;
                        }
                      }
                      $medis3=new LayananMedis3();
                      $medis3->setNamalayanan3("Rawat Inap");

                      echo $medis3->getNamalayanan3();
                    ?>
                  </a>
                </h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/medical.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title">
                <a  class="text-light">
                  <!-- enkapsulasi -->
                  <?php
                    class Medis4{
                      private $namalayanan4;

                      public function getNamalayanan4(){
                        return $this->namalayanan4;
                      }
                      public function setNamalayanan4($namalayanan4Value){
                        $this->namalayanan4=$namalayanan4Value;
                      }
                    }
                    $medis4=new Medis4();
                    $medis4->setNamalayanan4("Pelayanan Medical Check Up");

                    echo $medis4->getNamalayanan4();
                  ?>
                </a>
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/produk/painless.jpeg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title">
                <a href="" class="text-light">
                  <!-- enkapsulasi -->
                  <?php
                    class Pelayananmedis5{
                      private $pelayananke5;
                      public function getPelayananke5(){
                        return $this->pelayananke5;
                      }
                      public function setPelayananke5($pelayananke5Value){
                        $this->pelayananke5= $pelayananke5Value;
                      }
                    }
                    $pelayananmedis5=new Pelayananmedis5();
                    $pelayananmedis5->setPelayananke5("Painless Labour (Persalinan Tanpa Rasa Sakit)");

                    echo $pelayananmedis5->getPelayananke5();
                  ?>
                </a>
              </h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">PELAYANAN PENUNJANG MEDIS</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/rs-radiologi.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a href="" class="text-light">Radiologi</a></h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/rehabilitasi.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Rehabilitasi Medis</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/konsultasi-gizi.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
                <h5 class="post-title"><a class="text-light">Konsultasi Gizi</a></h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/rekammedis.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Rekam Medis</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/cssu.jpg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Central Sterile Supply Unit (CSSU)</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/icu.jpg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Intensive Care Unit (ICU)</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/produk/ibs.jpeg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Intalasi Bedah Sentral</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/produk/farmasi.jpeg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Farmasi</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
                <a href="" class="post-tumb">
                    <img src="../assets/img/produk/laboratorium.jpeg" alt="">
                </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Laboratorium</a></h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">PELAYANAN PENUNJANG NON MEDIS</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/pemulasaran.jpg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Pemulasaran Jenazah</a></h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/produk/ambulance.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title"><a class="text-light">Ambulans</a></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/pemeliharaan.jpg" alt="">
              </a>
            </div>
            <div class="body text-center">
                <h5 class="post-title"><a class="text-light">Pemeliharaan Sarana Prasana</a></h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/limbah.jpg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title">
                <a class="text-light">Pengelola Limbah</a>
              </h5>
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