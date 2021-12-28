<?php class RegisterModel extends Model
{

  public function getUsername($username)
  {
    $sql = "SELECT username FROM akun WHERE username='$username'";
    $results = $this->mysqli->query($sql);
    $cek_username = $results->num_rows;

    return $cek_username;
  }

  public function insertAkun($username, $password, $nama, $ttl, $jk, $alamat, $telp, $nik, $ktp, $sim)
  {
    $sql = "INSERT INTO akun (username, password, nama, ttl, jk, alamat, telp, nik, ktp, sim) VALUES ('$username', '$password', '$nama', '$ttl', '$jk', '$alamat', '$telp', '$nik', '$ktp', '$sim')";
    $this->mysqli->query($sql);
  }
}
