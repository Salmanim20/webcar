<?php class MobilModel extends Model
{

  public function selectMobil($jenis)
  {
    if ($jenis == 'All Models') {
      $sql = "SELECT * FROM mobil";
    } else {
      $sql = "SELECT * FROM mobil WHERE jenis = '$jenis'";
    }
    return $sql;
  }

}
