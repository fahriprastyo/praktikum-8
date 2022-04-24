<?php

    class bmiPasien

    { 
        public $nama,
            $berat,
            $tinggi,
            $umur,
            $jeniskelamin;
        public function hasilBMI()
        {
            return "<b>Nama : $this->nama <br><br>
                    Berat Badan : $this->berat <br><br>
                    Tinggi Badan : $this->tinggi<br><br>
                    Umur : $this->umur <br><br>
                    Jenis Kelamin : $this->jeniskelamin</b>";
        }
        public function statusBMI($BMI)
        {
            if ($BMI < 18.5) {
                return "<td>Kekurangan Berat Badan </td>";
            }   else if ($BMI >= 18.5 && $BMI <= 24.9) {
                return "<td> Normal (ideal) </td>";
            }   else if ($BMI >= 25.0 && $BMI <=29.9) {
                return "<td> Kelebihan Berat Badan</td>";
            }   else {
                return "<td> Kegemukan (Obesitas)</td>";
            }
            }
        }
    }
    if (isset($_GET["nama__lengkap"])) {
        $bmi = new bmiPasien;
        $bmi->nama = $_GET["nama__lengkap"];
        $bmi->berat = $_GET["Berat__"];
        $bmi->tinggi = $_GET["Tinggi__"];
        $bmi->umur = $_GET["Umur__"];
        $bmi->jeniskelamin = $_GET["Jenis__Kelamin"];
    }
    $pasien1 = ['nama' => 'Rosalia Amatasya', 'jeniskelamin' => 'perempuan' 'berat' => 66, 'tinggi' => 166, 'umur' => 18];
    $pasien2 = ['nama' => 'Asmophel Alif', 'jeniskelamin' => 'Laki-laki' 'berat' => 54, 'tinggi' => 154, 'umur' => 18];
    $pasien3 = ['nama' => 'Ummar Prastyo', 'jeniskelamin' => 'Laki-laki' 'berat' => 80, 'tinggi' => 180, 'umur' => 20];
    $pasien4 = ['nama' => $bmi->nama, 'jeniskelamin' => $bmi->jeniskelamin 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi, 'umur' => $bmi->umur];
    $pasien = ['nama' => $bmi->nama, 'jeniskelamin' => $bmi->jeniskelamin 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi, 'umur' => $bmi->umur];
    $ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];

    ?>