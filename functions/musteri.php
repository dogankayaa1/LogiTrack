<?php require_once __DIR__. '../../db/db.php';


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["musteri_adi"])){
    $musteri_adi = $_POST["musteri_adi"];
    $yetkili_adi = $_POST["yetkili_adi"];
    $telefon = $_POST["telefon"];
    $eposta = $_POST["eposta"];
    $adres = $_POST["adres"];
    musterikayit($musteri_adi,$yetkili_adi,$telefon,$eposta,$adres);
    header("Location:../views/musteri/musteri.php");
}

function musterikayit($musteri_adi,$yetkili_adi,$telefon,$eposta,$adres){
    global $baglanti;
    $sorgu = "INSERT INTO musteriler (musteri_adi,yetkili_adi,telefon,eposta,adres) VALUE (?,?,?,?,?)";
    $hazirlik = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($hazirlik, "ssiss", $musteri_adi,$yetkili_adi,$telefon,$eposta,$adres );
    mysqli_stmt_execute($hazirlik);
    
}


function musteriGetir(){
global $baglanti;
$sorgu = "SELECT id , musteri_adi, yetkili_adi,telefon,eposta,adres  FROM musteriler";
$hazirlik = mysqli_query($baglanti,$sorgu);
$musteri = [];
while($sonuc = mysqli_fetch_assoc($hazirlik)){
$musteri[] = $sonuc;
}

return $musteri;


}

 

    function musteriSil($silme_musteri_id){

        global $baglanti;

        $sorgu = "DELETE FROM musteriler WHERE id = ?";
        $hazirlik = mysqli_prepare($baglanti,$sorgu);
        mysqli_stmt_bind_param($hazirlik, "i" ,$silme_musteri_id);
        mysqli_stmt_execute($hazirlik);

    }

   if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["silme_musteri_id"])) {
    
    $gelen_id = $_POST["silme_musteri_id"];

    musteriSil($gelen_id);

    header("Location: ../views/musteri/musteri.php");
    exit; 
}


?>