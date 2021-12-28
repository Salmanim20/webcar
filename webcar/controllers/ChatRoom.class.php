<?php class ChatRoom extends Controller
{

  public function index()
  {
    session_start();
    $pesanModel = $this->loadModel('PesanModel');
    $username = $_SESSION['username'];
    $pesan = $pesanModel->getAll($username);

    $this->loadView('chatRoom', ['pesan' => $pesan]);
  }

  public function pesan()
  {
    session_start();
    $pesanModel = $this->loadModel('PesanModel');

    $username =$_SESSION['username'];
    $nama = $_SESSION['nama'];
    $pesan = $_POST['pesan'];

    $pesanModel->pesan($username, $nama, $pesan);

    header('Location: ?c=ChatRoom');
  }
}
