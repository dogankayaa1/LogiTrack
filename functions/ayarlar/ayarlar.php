<?php require_once("../../db/db.php");

$firma_adi = "";
$para_birimi = "";
$kdv_orani = "";



function ayarlar($firma_adi,$para_birimi,$kdv_orani){
    global $baglanti;
  
    $kayit = "UPDATE ayarlar SET firma_adi = ?, para_birimi = ?, kdv_orani = ? WHERE id = 1";
    $hazırlık = mysqli_prepare($baglanti,$kayit);
    // Eşleştirme Ve tip belirtme.
    mysqli_stmt_bind_param($hazırlık , "ssi",$firma_adi,$para_birimi,$kdv_orani);
    // kaydı tamamla
    mysqli_stmt_execute($hazırlık);
    echo '<div class="alert alert-success" role="alert"> Kayıt Başarılı </div>';
   
};





?>