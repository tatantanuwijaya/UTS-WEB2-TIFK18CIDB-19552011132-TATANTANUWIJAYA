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
              <a href="#">
                <span class="mai-call text-primary"></span>
                <!-- contructor -->
                <?php
                  class telepon{
                    public $notelepon;
                    function __construct($notelepon){
                      $this->notelepon=$notelepon;
                    }
                    function getNotelepon(){
                      return $this->notelepon;
                    }
                  }
                  $telepon=new telepon("(0260) 460364");
                  echo $telepon->getNotelepon();
                ?> 
              </a>
              <span class="divider">|</span>
              <a href="#">
                <span class="mai-mail text-primary"></span>
                <!-- contructor -->
                <?php
                  class email{
                    public $alamat_email;
                    function __construct($alamat_email){
                      $this->alamat_email=$alamat_email;
                    }
                    function get_email(){
                      return $this->alamat_email;
                    }
                  }
                  $email=new email("smrs.lanudkalijati@gmail.com1");
                  echo $email->get_email();
                ?>
              </a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
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
                <li class="nav-item active">
                  <a href="{{ url('home')}}" class="nav-link">
                    <!-- override -->
                    <?php
                      $menusmrs=new Home();
                      echo $menusmrs->menuhome();
                    ?>
                  </a>
                </li>
                <li class="nav-item">
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

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/lobirumahsakit.jpeg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">SISTEM MANAJEMEN RUMAH SAKIT</span>
        <h1 class="display-4">LANUD KALIJATI</h1>
        <a href="{{url('pelayanan')}}" class="btn btn-primary">Lihat Pelayanan Yuk</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Konsultasikan</span> kesehatannmu</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Lindungi</span> Kesehatanmu</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Beli </span>kebutuhan Obatmu</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp text-justify">
          <h3>Selamat Datang di <br> Sistem Manajemen Rumah Sakit</h3>
          <h1>Lanud Kalijati</h1>
          <p class="text-grey-dark mb-4">
            <!-- inheritance -->
            <?php
              class Aboutdetail{
                public $judul=true;
              }
              class Detailsingkat extends Aboutdetail{
                public $detsingkat=true;
              }
              $det1=new Aboutdetail();
              $det2=new Detailsingkat();
              if(property_exists($det2, "detsingkat")){
                echo "Sistem Manajemen Rumah Sakit Lanud Kalijati adalah sebuah sistem yang dibuat untuk mengatur berbagai pelayanan yang ada pada Rumah Sakit Lanud Kalijati. Nama sistem ini diambil dari diambil dari salah satu nama Rumah Sakit yang berada di Kalijati, Subang, Jawa Barat";
              }
            ?>
          </p>
          <a href="{{ url('about')}}" class="btn btn-primary">Baca selengkapnya disini</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="../assets/img/rs.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Pelayanan Rumah Sakit</h1>
      <div class="row mt-5">

        <div class="col-lg-4 py-2 zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-thumb">
                <img src="../assets/img/produk/igd.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title text-light">
                <!-- penggunan class konstanta -->
                <?php
                  class Layananrs{
                    const Jenislayanan1 = 'Pelayanan Medis';
                  }
                  echo Layananrs::Jenislayanan1;
                ?>
              </h5>
              <h6 class="text-grey">IGD/PONEK, Rawat Jalan, Rawat Inap, dan lain-lain</h6> <br>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-thumb">
                <img src="../assets/img/produk/radiologi.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title text-light">
                <!-- penggunaan class konstanta -->
                <?php
                  class Layananrs2{
                    const jenislayanan2 = "Pelayanan Penunjang Medis";
                  }
                  echo Layananrs2::jenislayanan2;
                ?>
              </h5>
              <h6 class="text-grey">Radiologi, Rehabilitasi Medis, dan lain-lain</h6>
              <br>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-thumb">
                <img src="../assets/img/produk/ambulance.jpeg" alt="">
              </a>
            </div>
            <div class="body text-center">
              <h5 class="post-title text-light">
                <?php
                  class layananrs3{
                    const jenislayanan3 = "Pelayanan Penunjang Non Medis";
                  }
                  echo layananrs3::jenislayanan3;
                ?>
              </h5>
              <h6 class="text-grey">Pemulasaran Jenazah, Ambulans dan lain-lain</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">ARTIKEL</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="{{ url('detail')}}" class="post-tumb">
                <img src="../assets/img/indocovid.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{ url('detail1')}}" class="text-light">Kasus aktif naik, begini data lengkap Kasus Corona di RI 25 November</a></h5>
              <span class="mai-time text-grey"> 25 November 2021</span>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/omicron.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title">
                <a href="{{ url('detail2')}}" class="text-light">Varian Baru Botswanan B.1.1.529 dan ketahui bahayanya</a>
              </h5>
              <span class="mai-time text-grey"> 25 November 2021</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-produk">
            <div class="header">
              <a href="" class="post-tumb">
                <img src="../assets/img/saudi.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a class="text-light">Varian baru Covid-19 telah terkonfirmasi di Arab Saudi</a></h5>
              <br>
              <span class="mai-time text-grey"> 2 Desember 2021</span>
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
            <li><a href="">Pemeliharaan Sarana Prasanan</a></li>
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
          </di>
        </div>
      </div>
      
      <hr>
      <p id="copyright">Copyright &copy; 2021 <a href="" target="_blank">TATAN TANUWIJAYA</a></p>
    </div>
  </footer>


</body>
</html>