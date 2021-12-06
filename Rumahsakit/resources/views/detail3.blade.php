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
  <title>Artikel-Kasus pertama varian baru Covid-19 terkonfirmasi di Arab Saudi</title>
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
                <li class="nav-item">
                  <a href="{{ url('about')}}" class="nav-link">
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

  <div class="page-section pt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <nav aria-label="Breadcrumb">
                      <ol class="breadcrumb bg-transparent py-0 mb-5">
                          <li class="breadcrumb-item"><a href="">Home</a></li>
                          <li class="breadcrumb-item"><a href="">Artikel</a></li>
                          <li class="breadcrumb-item" aria-current="page"><a href="">Varian baru Covid-19 telah terkonfirmasi di Arab Saudi</a></li>
                      </ol>
                  </nav>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-8">
                  <article class="blog-details">
                      <h1>Varian baru Covid-19 telah terkonfirmasi di Arab Saudi</h1>
                      <div class="post-thum">
                          <img src="../assets/img/saudi.jpg" alt="">
                      </div>
                      <div class="post-meta">
                        <div class="post-date">
                            <a href="">2 Desember 2021</a>
                        </div>
                      </div>
                      <div class="post-content">
                        <!-- penggunaan object interface dan polimorphisme -->
                        <?php
                            interface Artikel1{
                              public function detail1();
                            }
                            class detail_artikel1 implements Artikel1{
                              public function detail1(){
                                return array(
                                  '<p class="text-justify text-indent">
                                    Pada hari rabu, kantor berita negara Saudi Press Agency (SPA) melaporkan 
                                    bahwa Arab Saudi telah mengkonfirmasi kasus pertama dari varian Omicron covid-19 
                                    yang berasal dari negara Afrika Utara.
                                  </p>',
                                  '<p class="text-justify text-indent">
                                    SPA mengutip bahwa kementerian kesehatan kerajaan telah mengisolasi orang 
                                    tersebut beserta orang-orang yang melakukan kontak dengan mereka. Kementerian 
                                    kesehatan telah mengkonfirmasi bahwa orang tersebut adalah warga negara 
                                    Saudi yang telah melakukan perjalanan ke negara Afrika Utara. Kemudian investigasi 
                                    telah dilakukan dan pasien telah dikirim ke tempat karantina.
                                  </p>',
                                  '<p class="text-justify text-indent">
                                    Karena itu merupakan kasus pertama yang dilaporkan di Timur Tengah dan Afrika 
                                    Utara. Maka kementerian mendesak orang-orang untuk menyelesaikan vaksinasi dan 
                                    memerintahkan para pelancong untuk menghormati aturan isolasi diri dan pengujian.
                                  </p>'
                                );
                              }
                            }
                            function describe (Artikel1 $artilel1){
                              // echo get_class($artilel1);
                              if (is_array($artilel1->detail1())){
                                foreach($artilel1->detail1() as $artilel1){
                                  echo $artilel1;
                                }
                              }
                            }
                            $artilel1 = new detail_artikel1;
                            describe($artilel1);
                        ?>
                      </div>
                  </article>
              </div>
              <div class="col-lg-4">

                  <div class="sidebar-block">
                    <h3 class="sidebar-title">Artikel Terbaru</h3>

                    <div class="blog-item">
                          <a href="" class="post-thumb">
                              <img src="./assets/img/omicron.jpg" alt="">
                          </a>
                          <div class="content">
                              <h6><a href="{{url('detail2')}}">Varian Baru Botswanan B.1.1.529 dan ketahui bahayanya</a></h6>
                              <div class="meta">
                                <a href=""><span class="mai-calendar">25 November 2021</span></a>
                              </div>
                          </div>
                      </div>

                      <div class="blog-item">
                          <a href="" class="post-thumb">
                              <img src="./assets/img/indocovid.jpg" alt="">
                          </a>
                          <div class="content">
                              <h6><a href="{{url('detail1')}}">Kasus aktif naik, begini data lengkap Kasus Corona di RI 25 November</a></h6>
                              <div class="meta">
                                  <a href=""><span class="mai-calendar">25 November 2021</span></a>
                              </div>
                          </div>
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