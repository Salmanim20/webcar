<?php class PesanModel extends Model
{

  public function pesan($username, $nama, $pesan)
  {
    $sql = "INSERT INTO pesan (pesan, username, nama) VALUES ('$pesan', '$username', '$nama')";

    $this->mysqli->query($sql);
  }

  public function getAll($username)
  {
    $sql = "SELECT * FROM pesan WHERE username='$username'";

    return $this->mysqli->query($sql);
  }

}
