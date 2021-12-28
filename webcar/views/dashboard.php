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
      <section class="wrapper site-min-height">
        <h1><i class="fa fa-angle-right"></i> Sewa Mobil</h1>
        <form id="form-search" action="?c=Mobil&m=selectMobil" method='post'>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-panel">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label">Lokasi Rental</label>
                    <select class="form-control" name="lokasi" required>
                      <option value="">Pilih Lokasi</option>
                      <?php
                      $wilayah = mysqli_query($db, "SELECT * FROM wilayah") or die(mysqli_error($db));
                      while ($data = mysqli_fetch_array($wilayah)) {
                      ?>
                        <option value="<?php echo $data['wil']; ?>"><?php echo $data['wil']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label">Model Mobil</label>
                    <select class="form-control" name="jenis">
                      <option value="All Models">All Models</option>
                      <?php
                      $mobil = mysqli_query($db, "SELECT id, jenis FROM mobil") or die(mysqli_error($db));
                      while ($dataMobil = mysqli_fetch_array($mobil)) {
                      ?>
                        <option value="<?php echo $dataMobil['jenis']; ?>"><?php echo $dataMobil['jenis']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label">Jumlah Hari Peminjaman</label>
                    <div class="col-sm-13">
                      <input type="text" name="hari" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label">Tanggal Peminjaman</label>
                    <div class="col-md-11 col-xs-11">
                      <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2021" class="input-append date dpYears">
                        <input type="text" name="tgl" readonly="" value="01-01-2021" size="16" class="form-control" required>
                        <span class="input-group-btn add-on">
                          <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label">Waktu Pengambilan</label>
                    <div class="col-md-11 col-xs-11">
                      <div class="input-group bootstrap-timepicker">
                        <input type="text" name="waktu" class="form-control timepicker-default" required>
                        <span class="input-group-btn">
                          <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label"></label>
                    <div class="col-sm-13">
                      <button class="btn btn-theme">Cari Mobil</button>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
        </form>
        <br>
        <div class="row">
          <?php if (isset($_SESSION['jenis'])) {
            $query = mysqli_query($db, "$_SESSION[jenis]");
            while ($row = mysqli_fetch_assoc($query)) : ?>
              <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                  <a href="img/<?= $row['foto'] ?>" class="fancybox">
                    <img src="img/<?= $row['foto'] ?>" style="height:250px; width:100%">
                  </a>
                  <div class="caption text-center">
                    <h4><?= $row['jenis'] ?></h4>
                    <h5>Rp<?= number_format($row['harga']*$_SESSION['hari'],0 ,",",".") ?></h5>
                    <p>
                      <br>
                      <a href="?c=Informasi&m=infoMobil&jenis=<?php echo $row['jenis'] ?>&harga=<?php echo $row['harga'] ?>&foto=<?php echo $row['foto'] ?>&deskripsi=<?php echo $row['deskripsi'] ?>" class="btn btn-theme center-block">Pesan</a>
                    </p>
                  </div>
                </div>
              </div>
          <?php endwhile;
          }
          ?>
        </div>
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