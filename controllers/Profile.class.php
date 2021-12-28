<?php class Profile extends Controller
{

  public function index()
  {
    session_start();
    $profileModel = $this->loadModel('ProfileModel');
    $username = $_SESSION['username'];
    $pesan = $profileModel->getAll($username);

    $this->loadView('profile', ['pesan' => $pesan]);
  }

  public function editProfile()
  {
    $this->loadView('editProfile');
  }

  public function editAkun()
  {
    session_start();
    $profileModel = $this->loadModel('ProfileModel');
    if ($_SESSION['username' != $_POST['username']]) {
      $cek = $profileModel->getUsername($_POST['username']);
    }
    if ($cek > 0) {
      echo "Username sudah dipakai. Silahkan <a href= ?c=Profile&m=editProfile>ulangi</a> lagi";
    } else {
      $id = $_SESSION['id'];
      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $nama = $_POST['nama'];
      $ttl = $_POST['ttl'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $telp = $_POST['telp'];
      $nik = $_POST['nik'];
      $ktp = $_POST['ktp'];

      $profileModel->updateAkun($id, $username, $password, $nama, $ttl, $jk, $alamat, $telp, $nik, $ktp);

      $row = $profileModel->rowLogin($username);
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION['ttl'] = $row['ttl'];
      $_SESSION['jk'] = $row['jk'];
      $_SESSION['alamat'] = $row['alamat'];
      $_SESSION['telp'] = $row['telp'];
      $_SESSION['nik'] = $row['nik'];
      $_SESSION['ktp'] = $row['ktp'];

      header('Location: ?c=Profile');
    }
  }

  public function pemesananAktif()
  {
    session_start();
    $profileModel = $this->loadModel('ProfileModel');

    $model = $_POST['model'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $tgl = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    $username = $_SESSION['username'];

    $profileModel->pesan($model, $lokasi, $harga, $tgl, $waktu, $username);

    header('Location: ?c=Profile');
  }

  public function deletePemesanan()
  {
    $profileModel = $this->loadModel('ProfileModel');

    $id = $_POST['id'];

    $profileModel->delete($id);

    header('Location: ?c=Profile');
  }
}
