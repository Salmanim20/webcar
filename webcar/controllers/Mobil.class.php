<?php class Mobil extends Controller
{

  public function index()
  {
    $this->loadView('dashboard');
  }

  public function selectMobil()
  {
    session_start();
    $mobilModel = $this->loadModel('MobilModel');
    $_SESSION['lokasi'] = $_POST['lokasi'];
    $jenis = $_POST['jenis'];
    $_SESSION['hari'] = $_POST['hari'];
    $_SESSION['tgl'] = $_POST['tgl'];
    $_SESSION['waktu'] = $_POST['waktu'];

    $_SESSION['jenis'] = $mobilModel->selectMobil($jenis);

    header('Location: ?c=Mobil');
  }
}
