<?php
require_once '../db.php'; 
    if(isset($_SESSION['mail']))
    {
        $sorgu=$baglan->prepare("SELECT * FROM ebeveynler WHERE mail=?");
        $sorgu->execute(array($_SESSION['mail']));
        $islem=$sorgu->fetch();
    }
    else
    {
        header("Location:../index.php");
    }
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Çocuk Gelişimi - Ebeveyn Paneli</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assets/css/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-- jQuery 3 -->
<script src="../assets/js/jquery.min.js"></script>

<style>
.sec{cursor:pointer}
.bg-grey{background:#00000010;}
tr:hover{background:#00000010;}
.info-box-icon{
	height: 100px;
    width: 120px;
	line-height: 50px;
}
.info-box-icon, .info-box-content{min-height: 120px;}
.info-box-icon small{display: block;font-size:12px;line-height: 15px;}
.info-box-content {margin-left: 120px;}
</style>


</head>
<body class="hold-transition skin-red sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ç</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ÇOCUK</b>GELİŞİMİ</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="asd.php" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu" id="bildirimler"></li>
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../assets/img/noperson.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Demo Kullanıcı</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../assets/img/noperson.png" class="img-circle" alt="User Image">
                <p> Demo Kullanıcı <small></small></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left hide">
                  <a href="profil.php" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="cikis.php" class="btn btn-default btn-flat">Çıkış</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/img/noperson.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Demo Kullanıcı</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Çevrimiçi</a>
        </div>
      </div>

<br><br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="index.php"><i class="fa fa-building"></i> <span>Anasayfa</span></a></li>
    <li class=""><a href="cocuklar.php"><i class="fa fa-child"></i> <span>Çocuklar</span></a></li>
		<li class=""><a href="ani.php"><i class="fa fa-book"></i> <span>Anılar</span></a></li>
		<li class=""><a href="fotograf.php"><i class="fa fa-image"></i> <span>Fotograflar</span></a></li>
		      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    
      
    <section class="content container-fluid" style="min-height:600px;">
        <div class="row" style="margin-top:30px;">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                       



                        
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
            </div>
        </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Copyright &copy; 2020 
    </div>
    <!-- Default to the left -->
    <strong><a href="#">ÇG</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  <div style="margin:10px;">
<div id="layout-skins-list">
          <a href="#" data-skin="skin-blue" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> skin-blue</a>
				  <a href="#" data-skin="skin-blue-light" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> skin-blue-light</a>
				  <a href="#" data-skin="skin-yellow" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> skin-yellow</a>
				  <a href="#" data-skin="skin-yellow-light" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> skin-yellow-light</a>
				  <a href="#" data-skin="skin-green" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> skin-green</a>
				  <a href="#" data-skin="skin-green-light" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> skin-green-light</a>
				  <a href="#" data-skin="skin-purple" class="btn bg-purple btn-xs"><i class="fa fa-eye"></i> skin-purple</a>
				  <a href="#" data-skin="skin-purple-light" class="btn bg-purple btn-xs"><i class="fa fa-eye"></i> skin-purple-light</a>
				  <a href="#" data-skin="skin-red" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> skin-red</a>
				  <a href="#" data-skin="skin-red-light" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> skin-red-light</a>
				  <a href="#" data-skin="skin-black" class="btn bg-black btn-xs"><i class="fa fa-eye"></i> skin-black</a>
				  <a href="#" data-skin="skin-black-light" class="btn bg-black btn-xs"><i class="fa fa-eye"></i> skin-black-light</a>
</div>

  </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.7 -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- Skin -->
<script>
  var currentSkin = 'skin-red'
  $('#layout-skins-list [data-skin]').click(function (e) {
    e.preventDefault()
    var skinName = $(this).data('skin')
    $('body').removeClass(currentSkin)
    $('body').addClass(skinName)
    currentSkin = skinName
	$.get("tema.php?tema="+skinName);
  });
</script>
<!-- REQUIRED JS SCRIPTS X-->

<script>
$(document).on("click",".togglemenu",function () {
var menuid=$(this).attr("id");
$('.'+menuid).toggle("slow");
});
</script>

</body>
</html>