<?php class Login extends Controller
{
  public function index()
  {
    $this->loadView('login');
  }

  public function dashboard()
  {
    $this->loadView('dashboard');
  }

  public function halamanAwal()
  {
    $this->loadView('tampilanAwal');
  }

  public function loginAkun()
  {
    session_start();
    $loginModel = $this->loadModel('LoginModel');

    if (isset($_POST['login'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $cek = $loginModel->cekLogin($username);
      $row = $loginModel->rowLogin($username);

      if ($cek >= 1) {
        if (password_verify($password, $row['password'])) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['nama'] = $row['nama'];
          $_SESSION['ttl'] = $row['ttl'];
          $_SESSION['jk'] = $row['jk'];
          $_SESSION['alamat'] = $row['alamat'];
          $_SESSION['telp'] = $row['telp'];
          $_SESSION['nik'] = $row['nik'];
          $_SESSION['ktp'] = $row['ktp'];
          
          header("Location: ?c=Login&m=dashboard");
        } else {
          echo "Username atau Password Salah, Silahkan <a href= ?c=Login>Login</a> Kembali Dengan Username dan Password Yang Benar.";
        }
      } else {
        die('Login failed');
      }
    }
  }

  public function logout()
  {
    session_start();
    unset($_SESSION);
    session_destroy();
    session_write_close();
    header("Location: ?c=Login&m=halamanAwal");
  }
}
