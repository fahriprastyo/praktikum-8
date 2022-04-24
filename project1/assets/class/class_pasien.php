<?php
class Pasien {
  public $kode;
  public $nama;
  public $tmp_lahir;
  public $tgl_lahir;
  public $email;
  public $gender;

// Menyimpan Data Pasien BMI //
  function __construct($kode, $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender)
  {
    $this->kode = $kode;
    $this->nama = $nama_pasien;
    $this->tmp = $tmp_lahir;
    $this->tgl = $tgl_lahir;
    $this->email = $email;
    $this->gender = $gender;
  }
}
?>