<?php 
	session_start();
	require 'config/koneksi.php';
	if(isset($_POST['submit'])){
		$_SESSION['nama'] = $_POST['nama'];
    $_SESSION['usia'] = $_POST['usia'];
    //$data_diri = mysqli_query($con,"INSERT INTO hasil (nama,usia) values ('$_POST[nama]','$_POST[usia]')");
		echo "<script>alert('Berhasil!');document.location.href='https://pengecekancovid-19.000webhostapp.com/lad.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengecekan COVID-19</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="image/logoc.png" />

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="image/corona.png" class="img-responsive" width="950" height="500" style="background-position: center; background-size: cover;">                
              </div>
              <div class="col-lg-6">

                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> </h1>
                  </div>

                  <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> </h1>
                  </div>

                  <form method="post" class="user" name="pendaftaran" action="">
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <input type="number" name="usia" class="form-control form-control-user" placeholder="Usia">
                    </div>
                    
                    <input type="submit" name="submit" value="Masuk" class="btn btn-primary btn-user btn-block">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
