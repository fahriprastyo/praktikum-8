<?php
class BMI extends Pasien {
  public $berat;
  public $tinggi;

  function __construct($kode, $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi)
  {
    parent::__construct($kode, $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender);
    $this->berat = $berat;
    $this->tinggi = $tinggi/100;
  }

// Menghitung Nilai BMI //
  function hitung_BMI(){
    if ($this->tinggi > 1){
      $this->nilai_bmi = round($this->berat / ($this->tinggi**2),1);
      return round($this->berat / ($this->tinggi**2),1);
    }

    else {
      $this->nilai_bmi = round($this->berat / (($this->tinggi*100)**2),1);
      return round($this->berat / (($this->tinggi*100)**2),1);
    }
  }

// Status BMI Pasien //
  function status_BMI(){
    if ($this->nilai_bmi < 18.5){
      $this->status_bmi = 'Kekurangan Berat Badan';
      return 'Kekurangan Berat Badan';
    } 
    elseif ($this->nilai_bmi >= 18.5 && $this->nilai_bmi <= 24.9){
      $this->status_bmi = 'Normal (Ideal)';
      return 'Normal (Ideal)';
    } 
    elseif ($this->nilai_bmi >= 25.0 && $this->nilai_bmi <= 29.9){
      $this->status_bmi = 'Kelebihan Berat Badan';
      return 'Kelebihan Berat Badan';
    }
    elseif ($this->nilai_bmi >= 30.0){
      $this->status_bmi = 'Obesitas';
      return 'Obesitas';
    }
    else {
      $this->status_bmi = 'Data Tidak Valid';
      return 'Data Tidak Valid';
    }
  }

// Ilustrasi BMI
  function gambar_BMI(){
    if ($this->nilai_bmi < 18.5){
      return '<img class="img-fluid" src="assets/img/bmi3.png" alt=""/>';
    } 
    elseif ($this->nilai_bmi >= 18.5 && $this->nilai_bmi <= 24.9){
      return '<img class="img-fluid" src="assets/img/bmi4.png" alt=""/>';
    } 
    elseif ($this->nilai_bmi >= 25.0 && $this->nilai_bmi <= 29.9){
      return '<img class="img-fluid" src="assets/img/bmi1.png" alt=""/>';
    }
    elseif ($this->nilai_bmi >= 30.0){
      return '<img class="img-fluid" src="assets/img/bmi2.png" alt=""/>';
    }
    else {
      return 'Data Tidak Valid';
    }
  }
}
?>