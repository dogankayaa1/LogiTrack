<?php 
require_once '../../db/db.php';

// if($_SERVER["REQUEST_METHOD"] === "GET"){
//     header("location:index.php");
// }

$kategori_adi ="";
$aciklama = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $kategori_adi = $_POST["kategori_adi"];
    $aciklama = $_POST["aciklama"];


    function kategoriEkleme($kategori_adi,$aciklama){
        global $baglanti;

    if(!empty($kategori_adi) && !empty($aciklama)){
        $sorgu = "INSERT INTO kategori (kategori_adi,aciklama) VALUES (?,?)";
        $hazırlık = mysqli_prepare($baglanti,$sorgu);
        mysqli_stmt_bind_param($hazırlık , "ss" , $kategori_adi,$aciklama);
        mysqli_stmt_execute($hazırlık);
        mysqli_close($baglanti);
         echo '<div class="alert alert-success" role="alert"> Kayıt Başarılı </div>';

    }else{
        echo "Kategori ve Açıklama Boş Olamaz";
    }
    

    };

}




?>