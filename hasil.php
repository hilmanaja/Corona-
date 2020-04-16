<?php
    session_start();
    include "config/koneksi.php";

    if($_POST["btn_nilai"]){
        $jawaban = $_POST["jawaban"];
        $benar=0;
        if(count($_POST["jawaban"]) <1 ){
          //  echo "<script>alert('Anda belum menjawab soal');document.location.href=index.php</script>";
        }else{
            foreach($jawaban as $nmr => $nilai){
                $data_soal =mysqli_query($con, "SELECT * FROM soal_pilihan where nomor='$nmr'");
                
                $data_jawab = mysqli_fetch_array($data_soal);
                if($data_jawab["jawaban"] == $nilai){
                    $benar++;    
                }
            }
           // echo "Total Benar: ".$benar ;
            if ($benar <= 7){
                $message = "Resiko Anda Terkena Virus COVID-19 Rendah";
                // echo "Resiko Terkena Virus COVID-19 Rendah";
            }elseif ($benar >= 7 && $benar <=15){
                $message = "Resiko Anda Terkena Virus COVID-19 Sedang ";
            }else{
                $message = "Resiko Anda Terkena Virus COVID-19 Tinggi ";
            }
            $nama=$_SESSION['nama']; 
            $usia=$_SESSION['usia']; 
            $data_jawab = mysqli_query($con,"INSERT INTO hasil (nama,usia,jmlh_yes) values ('$nama','$usia','$benar')");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <title>Pengecekan COVID-19</title>
    </head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style ="text-align:center" class="bg-info" scope="col">HASIL PENGECEKAN COVID-19</th>
            </tr>
        </thead>
    </table>
    <table class="table">
        <br></br>
        <br></br>
        <center><b> Nama : <?php echo $_SESSION['nama'];?>
                    <br>
                    Usia : <?php echo $_SESSION['usia'];?> 
                    <br>
        <center><b><?php
                    echo $message;
                ?></b>
                
        <br></br>
        <br></br>
        <br></br>
        <center><b><a href="https://pengecekancovid-19.000webhostapp.com/index.php"><input type='button' class="btn btn-outline-primary" value= 'Kirim Tanggapan Lain '/></a></b></center>
        
</body>
  