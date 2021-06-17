<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<title>Çocuk Gelişimi</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!---- boostrap.min link local ----->

  <link rel="stylesheet" href="assets/css/style.css">
  <!---- boostrap.min link local ----->

  <script src="assets/js/bootstrap.min.js"></script>
  <!---- Boostrap js link local ----->


  <!---- Font awesom link local ----->
  <style type="text/css">
    body {
      background-color: #eee;
    }

    .container-fluid {
      padding: 50px;
    }

    .container {
      background-color: white;
      padding: 50px;
    }

    #title {
      font-family: 'Lobster', cursive;
      ;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="container">

      <h2 class="text-center" id="title">Çocuk Gelişimi</h2>

      <hr>
      <div class="row">
        <div class="col-md-5">
          <form method="post" action="kayit.php">
            <fieldset>
              <p class="text-uppercase pull-center"> Kayıt Ol</p>
              <div class="form-group">
              <label for="adsoyad">Adınız Soyadınız</label>
                <input type="text" name="adsoyad" id="adsoyad" class="form-control input-lg" placeholder="Adınız Soyadınız">
              </div>

              <div class="form-group">
              <label for="mail">E Posta Hesabınız</label>
                <input type="email" name="mail" id="mail" class="form-control input-lg" placeholder="E Posta Hesabınız">
              </div>
              <div class="form-group">
              <label for="sifre">Şifreniz</label>
                <input type="password" name="sifre" id="sifre" class="form-control input-lg"
                  placeholder="Şifreniz">
              </div>
              <div class="form-group">
              <label for="cinsiyet">Cinsiyetiniz</label>
              <select class="form-control" id="cinsiyet" name="cinsiyet">
                <option selected disabled>Lütfen Cinsiyetinizi Seçiniz</option>
                <option value="Erkek">Erkek</option>
                <option value="Kadın">Kadın</option>
              </select>
              </div>
              <div class="form-group">
              <label for="dtarihi">Doğum Tarihiniz</label>
                <input type="date" name="dtarihi" id="dtarihi" class="form-control input-lg"
                  placeholder="Doğum Tarihiniz">
              </div>
              <div class="form-group">
              <label for="es_adsoyad">Eşinizin Adı Soyadı</label>
                <input type="text" name="es_adsoyad" id="es_adsoyad" class="form-control input-lg"
                  placeholder="Eşinizin Adı Soyadı">
              </div>
              <div class="form-group">
              <label for="es_dtarihi">Eşinizin Doğum Tarihi</label>
                <input type="date" name="es_dtarihi" id="es_dtarihi" class="form-control input-lg"
                  placeholder="Eşinizin Doğum Tarihi">
              </div>
              <div class="form-group">
              <label for="es_cinsiyet">Eşinizin Cinsiyeti</label>
              <select class="form-control" id="es_cinsiyet" name="es_cinsiyet">
                <option selected disabled>Lütfen Eşinizin Cinsiyetini Seçiniz</option>
                <option value="Erkek">Erkek</option>
                <option value="Kadın">Kadın</option>
              </select>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Üyelik ve Gizlilik Sözleşmesini Kabul Ediyorum.
                </label>
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-primary">Kayıt Ol</button>
              </div>
            </fieldset>
          </form>
        </div>

        <div class="col-md-2">
          <!-------null------>
        </div>

        <div class="col-md-5">
          <form method="POST" action="giris.php">
            <fieldset>
              <p class="text-uppercase"> Hesabına Giriş Yap: </p>

              <div class="form-group">
                <input type="email" name="mail" id="mail" class="form-control input-lg" placeholder="E Posta Adresiniz">
              </div>
              <div class="form-group">
                <input type="password" name="sifre" id="sifre" class="form-control input-lg"
                  placeholder="Şifreniz">
              </div>
              <div>
                <button type="submit" class="btn btn-md">Giriş Yap</button>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
   
  </div>
</body>


</html>