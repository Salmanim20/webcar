<?php class ProfileModel extends Model
{

  public function getUsername($username)
  {
    $sql = "SELECT username FROM akun WHERE username='$username'";
    $results = $this->mysqli->query($sql);
    $cek_username = $results->num_rows;

    return $cek_username;
  }

  public function updateAkun($id, $username, $password, $nama, $ttl, $jk, $alamat, $telp, $nik, $ktp)
  {
    session_start();
    $sql = "UPDATE akun SET username = '$username', password = '$password', nama = '$nama', ttl = '$ttl', jk = '$jk', alamat = '$alamat', telp = '$telp', nik = '$nik', ktp = '$ktp' WHERE id = $id";
    $this->mysqli->query($sql);
  }

  public function rowLogin($username)
  {
    $sql = "SELECT * FROM akun WHERE username = '$username'";
    $results = $this->mysqli->query($sql);
    $row = $results->fetch_assoc();

    return $row;
  }

  public function pesan($model, $lokasi, $harga, $tgl, $waktu, $username)
  {
    $sql = "INSERT INTO pemesanan (model, lokasi, harga, tgl, waktu, username) VALUES ('$model', '$lokasi', '$harga', '$tgl', '$waktu', '$username')";

    $this->mysqli->query($sql);
  }

  public function getAll($username)
  {
    $sql = "SELECT * FROM pemesanan WHERE username='$username'";

    return $this->mysqli->query($sql);
  }

  public function delete($id)
  {
    $sql = "DELETE FROM pemesanan WHERE id = $id";

    $this->mysqli->query($sql);
  }
}
