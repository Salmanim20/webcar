<?php
session_start();
include "db.php";
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
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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
    <?php include 'components/sidebarDashboard.php'; ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Sewa</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
          <div class="col-lg-12">
            <form action="?c=Profile&m=pemesananAktif" method="post">
              <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Data Sewa</h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <div class="col-md-offset-3 col-md-10 col-xs-6">
                        <img src="img/<?= $_SESSION['foto'] ?>" style="height:250px; width:50%">
                      </div>
                    </tr>
                    <tr>
                      <td>Model Mobil</th>
                      <td><?php echo $_SESSION['model'] ?></td>
                      <input type="hidden" name="model" value="<?php echo $_SESSION['model'] ?>">
                    </tr>
                    <tr>
                      <th>Lokasi</th>
                      <td><?php echo $_SESSION['lokasi'] ?> </td>
                      <input type="hidden" name="lokasi" value="<?php echo $_SESSION['lokasi'] ?>">
                    </tr>
                    <tr>
                      <th>Total Harga</th>
                      <td>Rp<?php echo number_format($_SESSION['harga'] * $_SESSION['hari'],0,",",".") ?> </td>
                      <input type="hidden" name="harga" value="<?php echo $_SESSION['harga'] * $_SESSION['hari'] ?>">
                    </tr>
                    <tr>
                      <th>Tanggal Ambil</th>
                      <td><?php echo $_SESSION['tgl'] ?></td>
                      <input type="hidden" name="tgl" value="<?php echo $_SESSION['tgl'] ?>">
                    </tr>
                    <tr>
                      <th>Jam Ambil</th>
                      <td><?php echo $_SESSION['waktu'] ?></td>
                      <input type="hidden" name="waktu" value="<?php echo $_SESSION['waktu'] ?>">
                    </tr>
                    <tr>
                      <th>Informasi Mobil</th>
                      <td><?php echo $_SESSION['deskripsi'] ?></td>
                    </tr>
                  </thead>
                </table>
                <div>
                </div>
                <button class="btn btn-theme center-block">Pesan Sekarang</button>
              </div>
            </form>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <!-- /row -->
        <!-- INPUT MESSAGES -->

        <!-- /row -->
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>