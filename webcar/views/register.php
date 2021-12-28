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
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="?c=Register&m=insertAkun" method='post'>
        <h2 class="form-login-heading">Register</h2>
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
          <label class="control-label">Foto KTP</label>
          <div class=>
            <input type="file" name="ktp" class="file-pos" required>
          </div>
          <br>
          <label class="control-label">Foto SIM</label>
          <div class=>
            <input type="file" name="sim" class="file-pos" required>
          </div>
          <br>
          <button class="btn btn-theme btn-block">Register Now</button>
          <hr>
        </div>
      </form>
    </div>
  </div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>