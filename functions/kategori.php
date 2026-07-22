<?php 
require_once '../../db/db.php';



$kategori_adi ="";
$aciklama = "";
$guncelleme_kategori_adi= "";

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
         echo '<div class="alert alert-success" role="alert"> Kayıt Başarılı </div>';

    }else{
        echo "Kategori ve Açıklama Boş Olamaz";
    }

    };

    $guncelleme_kategori_id = "";
    $guncelleme_kategori_adi = "";
    $guncelleme_kategori_aciklama = "";


   

}

function kategoriGetir(){
global $baglanti;
$sorgu = "SELECT id , kategori_adi, aciklama  FROM kategori";
$hazirlik = mysqli_query($baglanti,$sorgu);
$kategori = [];
while($sonuc = mysqli_fetch_assoc($hazirlik)){
$kategori[] = $sonuc;
}

return $kategori;


}




?>