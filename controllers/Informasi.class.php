<?php class Informasi extends Controller
{

  public function index()
  {
    $this->loadView('informasi');
  }

  public function infoMobil()
  {
    session_start();
    $_SESSION['model'] = $_GET['jenis'];
    $_SESSION['harga'] = $_GET['harga'];
    $_SESSION['foto'] = $_GET['foto'];
    $_SESSION['deskripsi'] = $_GET['deskripsi'];

    $this->loadView('informasi');
  }

}
