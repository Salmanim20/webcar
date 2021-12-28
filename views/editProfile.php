<?php
session_start();
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Webcar - Website Rencar</title>

  <!-- Favicons -->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include 'components/navbar.php'; ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include 'components/sidebarProfile.php'; ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <div id="login-page">
      <div class="container">
        <form class="form-login" action="?c=Profile&m=editAkun" method="post" enctype="multipart/form-data">
          <h2 class="form-login-heading">Edit Profile</h2>
          <div class="login-wrap">
            <label class="control-label">Username</label>
            <input type="text" name="username" class="form-control" required>
            <br>
            <label class="control-label">Password</label>
            <input type="password" name="password" class="form-control" required>
            <br>
            <label class="control-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
            <br>
            <label class="control-label">Tempat, Tanggal, Lahir</label>
            <input type="text" name="ttl" class="form-control" required>
            <br>
            <label class="control-label">Jenis Kelamin
              <p>
                <input type="radio" name="jk" id="inlineCheckbox1" value="Laki-laki" checked> Laki-laki
                <br>
                <input type="radio" name="jk" id="inlineCheckbox2" value="Perempuan"> Perempuan
              </p>
            </label>
            <br>
            <label class="control-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
            <br>
            <label class="control-label">Nomor Telepon</label>
            <input type="text" name="telp" class="form-control" required>
            <br>
            <label class="control-label">NIK</label>
            <input type="text" name="nik" class="form-control" required>
            <br>
            <br>
            <button class="btn btn-theme btn-block">Save Edit</button>
            <hr>
          </div>
        </form>
      </div>
    </div>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>