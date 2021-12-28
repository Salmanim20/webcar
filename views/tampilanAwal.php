<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location: ?c=Login&m=dashboard");
}

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
    <?php include 'components/navbarIndex.php'; ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section>
      <section class="wrapper">
        <div class="row content-panel">
          <h2 class="centered">Tentang Webcar</h2>
          <div class="col-md-10 col-md-offset-1 mt mb">
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>Webcar (Website rencar) adalah sebuah website rental mobil untuk memudahkan konsumen dalam menemukan penyewaan mobil di kabupaten/kota masing-masing dengan cara yang mudah dan tidak ribet</p>
                  </div>
                  <div class="accordion-inner">
                    <p>Terlalu jauh dari lokasimu? pilih sendiri lokasi penjemputan terdekat dari lokasimu.</p>
                  </div>
                  <div class="accordion-inner">
                    <p>Dibawah ini terdapat beberapa jenis mobil yang kami tawarkan di lokasi pilihan anda. Mobil-mobil dan jenis mobil tertentu yang ditawarkan tergantung dari pilihan yang tersedia dan akan bervariasi disetiap lokasi. Spesifikasi yang diberikan hanya sekedar petunjuk secara umum dan dapat berubah setiap saat tanpa pemberitahuan terlebih dahulu.</p>
                  </div>
                  <div class="accordion-inner">
                    <p>Memakai kendaraan umum kelihatannya adalah pilihan yang paling tepat, tetapi alternatif berkeliling kota dengan lebih aman dan nyaman adalah dengan jasa rental mobil yang akan mengantarkan anda dari satu tujuan ke tujuan lainnya dengan lebih mudah. Rental Mobil didirikan dengan tujuan memberikan layanan rental mobil yang maksimal untuk semua orang,yang membutuhkan rental mobil jangka pendek maupun panjang dengan harga yang bersaing.</p>
                  </div>
                  <div class="accordion-inner">
                    <p>Ketika anda memerlukan rental mobil jangka pendek atau rental mobil jangka panjang, kami siap membantu dengan jalan menyediakan rental mobil dengan kondisi yang baik. Jenis – jenis mobil yang kami sediakan: Rental Daihatsu Terios, Rental Honda BR-V, Rental Suzuki Ertiga, Rental Toyota Agya, Rental Suzuki Ignis, Rental Toyota Rush, Rental Honda Brio, Rental Daihatsu Sigra, serta jenis mobil lainnya.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end accordion -->
          </div>
          <!-- col-md-10 -->
        </div>
        <div class="row mt mb">
          <div class="col-lg-12">
            <h2 class="centered">
              <font color="#ffffff">Kenapa Pilih Kami?
            </h2>
            </font>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-money fa-3x"></i></a>
                </div>
                <h4>Harga Termurah</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-mobile-phone fa-3x"></i></a>
                </div>
                <h4>Mudah dan Fleksibel</h4>
              </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="dmbox">
                <div class="service-icon">
                  <a class=""><i class="dm-icon fa fa-car fa-3x"></i></a>
                </div>
                <h4>Banyak Varian</h4>
              </div>
            </div>
            <!-- end dmbox -->
          </div>
          <!--  /col-lg-12 -->
        </div>
        <!-- /row -->

        <!--  /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/index-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>