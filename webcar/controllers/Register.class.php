<?php class Register extends Controller
{

  public function index()
  {
    $this->loadView('tampilanAwal');
  }

  public function toLogin()
  {
    $this->loadView('login');
  }

  public function createAkun()
  {
    $this->loadView('register');
  }

  public function insertAkun()
  {
    $registerModel = $this->loadModel('RegisterModel');
    $cek = $registerModel->getUsername($_POST['username']);
    if ($cek > 0) {
      echo "Username sudah dipakai. Silahkan <a href= ?c=Register&m=createAkun>ulangi</a> lagi";
    } else {
      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $nama = $_POST['nama'];
      $ttl = $_POST['ttl'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $telp = $_POST['telp'];
      $nik = $_POST['nik'];
      $ktp = $_POST['ktp'];
      $sim = $_POST['sim'];

      $registerModel->insertAkun($username, $password, $nama, $ttl, $jk, $alamat, $telp, $nik, $ktp, $sim);

      header('Location: ?c=Register&m=toLogin');
    }
  }
}
