<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Ukur Berat Badan</title>
      <link href="css/adminite.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
<?php
    include_once 'header.php';
    include_once 'sidebar.php';
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>WELCOME</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Navbar Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-image: linear-gradient(white, cyan);" class="h-100 w-100" style="box-sizing: border-box;">
        <div id="ukurBMIM" class="content-3-5  flex-column align-items-right h-100 flex-lg-row"
          style="font-family: 'Poppins', Arial">
          <div class="position-relative d-none d-lg-block h-1 width-right">
          </div>
          <div class="d-flex mx-auto align-items-right justify-content-right width-right mx-lg-10">
            <div class="center mx-lg-100 mx-auto">
              <div style="margin-bottom:1rem" class="align-items-center justify-content-center d-lg-none d-flex">
              </div>
              <h3 class="title-text; center;"> <center>Ukur Berat Badan <span style="color: pink;"> Ideal</span></h3></center>
              <p class="caption-text">
              </p>
              <form style="margin-top: 1rem" class="form-horizontal" action="ukurBMI.php" method="POST">
                <div style="margin-bottom: 1.3rem">
                  <label for="tb" class="d-block input-label">Tinggi Badan</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="text" name="tb" id="tb" placeholder="Masukkan tinggi badan Anda! (cm)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1.3rem">
                  <label for="bb" class="d-block input-label">Berat badan</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="text" name="bb" id="bb" placeholder="Masukan Berat Badan Anda! (kg)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1.3rem">
                  <label for="usia" class="d-block input-label">Umur</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="number" name="usia" id="usia" placeholder="Masukka Umur Anda"
                      autocomplete="on" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender" class="input-label">Jenis Kelamin</label> 
                  <div class="d-flex w-100 div-input">
                    <select id="gender" name="gender" required="required" class="input-field border-0 custom-select">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <input value="SUBMIT" class="btn btn-fill text-white d-block w-100" type="submit" name="proses">
              </form>
              </p>
            </div>
          </div>
        </div>
        <div class="hasil col-md-12" style="padding-bottom: 3rem;">
            <?php
              require_once 'assets/class/class_pasien.php';
              require_once 'assets/class/class_bmi.php';

              $proses= $_POST['proses'];
              $berat_badan = $_POST['bb'];
              $tinggi_badan = $_POST['tb'];
              $gender = $_POST['gender'];
              $usia = $_POST['usia'];

              $pasien_instant = new BMI('P001', 'instant', 'instant', 'instant', 'instant', $gender, $berat_badan, $tinggi_badan);
            
              if (!empty($proses)){
                echo '<h1 class="title-text-big" style="font: 570 2.5rem/2.875rem Arial, sans-serif;color:gray;"> Skor Berat Badan Ideal Anda adalah... '.'</h1>';
                echo '<h1 class="title-text-big" style="font: 570 4rem/2.875rem Arial, sans-serif;color:black;">'.$pasien_instant->hitung_BMI().'</h1>';
                echo '<h1 class="title-text" style="font: 600 1.875rem/2.25rem Arial, sans-serif;color:gray;margin-top:1rem">Anda '.$pasien_instant->status_BMI().'</h1>';           
              };
            ?>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php
    include_once 'footer.php';
    ?>