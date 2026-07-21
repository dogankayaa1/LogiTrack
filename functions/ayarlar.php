<?php require_once("../db/db.php");



$firma_adi = "";
$para_birimi = "";
$kdv_orani = "";



function ayarGuncelle($firma_adi,$para_birimi,$kdv_orani){
    global $baglanti;
  
    $kayit = "UPDATE ayarlar SET firma_adi = ?, para_birimi = ?, kdv_orani = ? WHERE id = 1";
    $hazırlık = mysqli_prepare($baglanti,$kayit);
    // Eşleştirme Ve tip belirtme.
    mysqli_stmt_bind_param($hazırlık , "ssi",$firma_adi,$para_birimi,$kdv_orani);
    // kaydı tamamla
    mysqli_stmt_execute($hazırlık);
    mysqli_close($baglanti);
    echo '<div class="alert alert-success" role="alert"> Kayıt Başarılı </div>';
   
};

function ayarGetir(){
    global $baglanti;
    $getir = "SELECT * FROM ayarlar LIMIT 1";
    $hazirlik = mysqli_prepare($baglanti, $getir);
    mysqli_stmt_execute($hazirlik);
    $sonuc = mysqli_stmt_get_result($hazirlik);
    $gelen = mysqli_fetch_assoc($sonuc);
    mysqli_close($baglanti);


 return [
    "firma_adi" => $gelen["firma_adi"],
    "para_birimi" => $gelen["para_birimi"],
    "kdv_orani" => $gelen["kdv_orani"],
 ];
    


}






?>