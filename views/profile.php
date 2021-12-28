<?php
session_start();

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

    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row content-panel">
          <div class="profile-text mt mb centered">
            <div class="mid-divider hidden-sm hidden-xs">
            </div>
          </div>
          <!-- /col-md-4 -->
          <div class="profile-text mt mb centered">
            <h1>Hi <?php echo $_SESSION['nama'] ?></h1>
          </div>
          <!-- /col-md-4 -->
          <div class="col centered">
            <div class="profile-pic">
              <p><img src="img/profil.png" class="img-circle"></p>
              <p>
                <a href="?c=Profile&m=editProfile">
                  <button class="btn btn-theme02">Edit Profile</button></a>
              </p>
            </div>
          </div>
          <br>
          <div class="profile-text centered">
            <h3>Profile Anda</h3>
          </div>
          <div class="profile-text centered">
            <h4>Username : <?php echo $_SESSION['username'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>Nama Lengkap : <?php echo $_SESSION['nama'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>Tempat, Tanggal Lahir : <?php echo $_SESSION['ttl'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>Jenis Kelamin : <?php echo $_SESSION['jk'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>Alamat : <?php echo $_SESSION['alamat'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>Nomor Telepon : <?php echo $_SESSION['telp'] ?></h4>
          </div>
          <div class="profile-text mt mb centered">
            <h4>NIK : <?php echo $_SESSION['nik'] ?></h4>
          </div>
          <hr>
          <!-- /col-md-4 -->
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i> Pemesanan Aktif</h4>
            <hr>
            <thead>
              <tr>
                <th><i class="fa fa-car"></i> Model Mobil</th>
                <th><i class="fa fa-map-marker"></i> Lokasi</th>
                <th><i class="fa fa-money"></i> Total Harga</th>
                <th><i class=" fa fa-calendar"></i> Tanggal Ambil</th>
                <th><i class=" fa fa-clock-o"></i> Jam Ambil</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php while ($pemesanan = $pesan->fetch_object()) : ?>
                <tr>
                  <td>
                    <a href="basic_table.html#"><?php echo $pemesanan->model ?></a>
                  </td>
                  <td class="hidden-phone"><?php echo $pemesanan->lokasi; ?></td>
                  <td>Rp<?php echo number_format($pemesanan->harga, 0, ",", "."); ?></td>
                  <td><?php echo $pemesanan->tgl; ?></td>
                  <td><?php echo $pemesanan->waktu; ?></td>
                  <td>
                    <form action="?c=Profile&m=deletePemesanan" method="post">
                      <input type="hidden" name="id" value="<?php echo $pemesanan->id; ?>">
                      <button class="btn btn-danger btn-xs">Batalkan</button>
                    </form>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
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

</body>

</html>