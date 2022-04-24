<?php
class BMIPasien extends BMI {

  public $tgl_periksa;

// Data BMI Pasien //
  function __construct($kode, $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi, $tgl_periksa)
  {
    parent::__construct($kode, $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi);
    $this->tgl_periksa = $tgl_periksa;
  }
}
?>