<?php 
    session_start();
?>
<?php
    error_reporting(0);
    include "config/koneksi.php";

    // if($_POST["btn_nilai"]){
    //     $jawaban = $_POST["jawaban"];
    //     $benar=0;
    //     if(count($_POST["jawaban"]) <1 ){
    //         echo "<script>alert('Anda belum menjawab soal');document.location.href=index.php</script>";
    //     }else{
    //         foreach($jawaban as $nmr => $nilai){
    //             $data_soal =mysqli_query($con, "SELECT * FROM soal_pilihan where nomor='$nmr'");
                
    //             $data_jawab = mysqli_fetch_array($data_soal);
    //             if($data_jawab["jawaban"] == $nilai){
    //                 $benar++;    
    //             }
    //         }
    //        // if(isset($_POST['submit'])){ 
    //         //echo "Total Benar: ".$benar ;
    //         echo "<p>";
    //         if ($benar <= 7){
    //             echo "Resiko Terkena Virus COVID-19 Rendah";
    //         }elseif ($benar >= 7 && $benar <=15){
    //             echo "Resiko Terkena Virus COVID-19 Sedang ";
    //         }else{
    //             echo "Resiko Terkena Virus COVID-19 Tinggi ";
    //         }
    //             // $data = array("username" => "admin", "password" => "hunter2");
    //             // http_post("hasil.php", "POST", $data);
    //             // echo "<script>document.location.href=hasil.php</script>";
    //            header("Location:http://localhost/tugascorona/hasil.php?benar=".$benar);
    //     }
    // }
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
            
                <tr class="bg-info">
                    <th scope="col">Nomor</th>
                    <th scope="col">Soal</th>
                    <th scope="col">YA</th>
                    <th scope="col">TIDAK</th>
                </tr>
                </div>
            </thead>
            <tbody>
            <?php
                $nmr=0;
                $soal = mysqli_query($con,"SELECT * FROM soal_pilihan");
                while($data=mysqli_fetch_array($soal)){
                  $nmr ++; 
            ?>
            <form method='post' name="form1" id="form1" action="hasil.php">
                <tr>
                    <th scope="col"><?php echo $nmr; ?></th>
                    <td> <?php echo $data["pertanyaan"]?></td>
                    <td><input type="radio" value="a" name="jawaban[<?php echo $data['nomor']?>]" ><?php echo $data["jawab_a"]?></td>
                    <td><input type="radio" value="b" name="jawaban[<?php echo $data['nomor']?>]" ><?php echo $data["jawab_b"]?><br></td>
                </tr>
                <?php
                     }
                ?>
               
               
            </tbody>
        </table>
        <!-- <input type="submit" class="btn btn-outline-primary" name="btn_nilai" id="simpan" value="Simpan"/> -->
        <!-- <button onclick="myFunction()">Click me</button> -->
        <input type='submit' class="btn btn-outline-primary" name='btn_nilai' value= 'Perlihatkan Hasil'/>
        <a href="http://localhost/tugascorona/lad.php"><input type='button' class="btn btn-outline-primary" value= 'Kembali'/></a>
        </form>
        <script src="js/jquery/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body> 
</html>
            