<?php class LoginModel extends Model
{

  public function cekLogin($username)
  {
    $sql = "SELECT * FROM akun WHERE username = '$username'";
    $results = $this->mysqli->query($sql);
    $cek = $results->num_rows;
    
    return $cek;
  }

  public function rowLogin($username)
  {
    $sql = "SELECT * FROM akun WHERE username = '$username'";
    $results = $this->mysqli->query($sql);
    $row = $results->fetch_assoc();

    return $row;
  }
}
