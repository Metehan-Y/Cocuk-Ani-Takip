<?php
require_once '../db.php';

if($_GET["id"]){
  $id=$_GET["id"];
  $cocukadi=$_GET["cocukadi"];
  $ebeveynadi=$_GET["ebeveynadi"];
  $sql1="SELECT * FROM cocuklar where id=".$id; 
  /////////////////////////////

  foreach ($baglan->query($sql1) as $row)
  {
    $id=$row['id'];
    $adsoyad = $row['adsoyad'];
    $dtarihi = $row['dtarihi'];      
    $cinsiyet = $row['cinsiyet'];
    $resim = $row['resim'];
    $bio = $row['bio']; 
  }

  $sorgu=$baglan->prepare("SELECT * FROM ebeveynler WHERE adsoyad=?");
        $sorgu->execute(array($ebeveynadi));
        $ebeveyn=$sorgu->fetch();

        $sorgu2=$baglan->prepare("SELECT * FROM olaylar WHERE cocukadi=?");
        $sorgu->execute(array($cocukadi));
        $olaylar=$sorgu->fetch();


}
else{
  header("Location:../index.php");
}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Çocuk Gelişimi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../ebeveyn/img/<?php echo $resim ?>" alt="" style="witdh:50px; height:50px object-fit:cover;" class="img-fluid rounded-circle" >
        <h1 class="text-light"><a href="index.php"><?php echo $adsoyad ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span><?php echo $adsoyad ?></span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Hakkında</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Fotograf Galerisi</a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Anıları</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $adsoyad ?></h1>
      <p>Ebeveylerim <span class="typed" data-typed-items="<?php echo $ebeveynadi ?>, <?php echo $ebeveyn['es_adsoyad'] ?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Hakkında</h2>
          <p><?php echo $bio ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="../ebeveyn/img/<?php echo $resim ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $adsoyad ?></h3>
            <p class="font-italic">
            <?php echo $adsoyad ?> : <?php echo $bio ?>
            </p>
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Doğum Tarihi:</strong> <?php echo $dtarihi ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Cinsiyet:</strong> <?php echo $cinsiyet ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong><?php if($ebeveyn['cinsiyet']=="Erkek"){echo "Baba ";} else{ echo "Anne ";} ?>Adı:</strong> <?php echo $ebeveynadi ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong><?php if($ebeveyn['cinsiyet']=="Erkek"){echo "Anne ";} else{ echo "Baba ";} ?> Adı:</strong> <?php echo $ebeveyn['es_adsoyad'] ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Fotograf Albümü</h2>
      <p><?php echo $adsoyad ?>'in fotograflarından oluşturulmuş ölümsüz bir albüm.</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tüm Resimler</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

<?php
    $sql2="SELECT * FROM galeri where cocukid=".$id; 
  /////////////////////////////

  foreach ($baglan->query($sql2) as $row)
  {
    $resimid=$row['id'];
    $resim = $row['resim'];
    $aciklama = $row['aciklama'];      
    $tarih = $row['tarih'];
    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src='../ebeveyn/img/".$resim."' class='img-fluid' alt=''>
            </div>
          </div>";
  }
?>
      

      

    </div>

  </div>
</section><!-- End Portfolio Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $adsoyad ?>'in Anıları</h2>
          <p><?php echo $bio ?></p>
        </div>

        <div class="row">
          
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Gelişim Zaman Tüneli</h3>

            <?php
                  $sql3="SELECT * FROM olaylar where cocukadi='".$adsoyad."'"; 
                /////////////////////////////

                foreach ($baglan->query($sql3) as $roww)
                {
                  $olayid         = $roww['id'];
                  $cocukadi       = $roww['cocukadi'];
                  $olaytarihi     = $roww['olaytarihi'];      
                  $olaybasligi    = $roww['olaybasligi'];
                  $olayaciklamasi = $roww['olayaciklamasi'];
                  $olayresim      = $roww['olayresim'];
                  echo "<div class='resume-item'>
                          <h4>".$olaybasligi."</h4>
                          <h5>".$olaytarihi."</h5>
                          <p><em>".$olayaciklamasi."</em></p>
                          <p><small><a href='anidetay.php?id=".$olayid."'>Detaylar İçin Tıklayınız.</a></small></p>
                        </div>";
                }
              ?>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Çocuk Gelişimi</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="#">Çocuk Gelişimi</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>