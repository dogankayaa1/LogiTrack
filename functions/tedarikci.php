<?php require_once __DIR__. '../../db/db.php';


if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ekle_firma_adi"])){
    $ekle_firma_adi = $_POST["ekle_firma_adi"];
    $ekle_yetkili_adi = $_POST["ekle_yetkili_adi"];
    $ekle_firma_telefon = $_POST["ekle_firma_telefon"];
    $ekle_firma_eposta = $_POST["ekle_firma_eposta"];
    $ekle_firma_adres = $_POST["ekle_firma_adres"];
   tedarikciEkle($ekle_firma_adi,$ekle_yetkili_adi,$ekle_firma_telefon,$ekle_firma_eposta,$ekle_firma_adres);
   header("Location:../views/tedarikci/tedarikci.php");
}
 function tedarikciEkle($ekle_firma_adi,$ekle_yetkili_adi,$ekle_firma_telefon,$ekle_firma_eposta,$ekle_firma_adres){
        global $baglanti;
    $sorgu = "INSERT INTO tedarikciler (firma_adi,yetkili_adi,telefon,eposta,adres) VALUES (?,?,?,?,?)";
    $hazirlik = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($hazirlik , "ssiss" , $ekle_firma_adi,$ekle_yetkili_adi,$ekle_firma_telefon,$ekle_firma_eposta,$ekle_firma_adres );
    mysqli_stmt_execute($hazirlik);
    
 };

 function tedarikciGetir(){
    global $baglanti;

    $sorgu = "SELECT id,firma_adi,yetkili_adi,telefon,eposta,adres FROM tedarikciler";
    $gelen =mysqli_query($baglanti,$sorgu);
    $tedarikci = [];
    while($sonuc = mysqli_fetch_assoc($gelen)){
        $tedarikci[] = $sonuc;
    }
    return $tedarikci;


 }

 if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["tedarikci_sil"])){
    $silme_kategori_id = $_POST["tedarikci_sil"];
    tedariciSil($silme_kategori_id);
    header("Location:../views/tedarikci/tedarikci.php");

 }

 function tedariciSil($silme_kategori_id){

    global $baglanti;

        $sorgu = "DELETE FROM tedarikciler WHERE id = ?";
        $hazirlik = mysqli_prepare($baglanti,$sorgu);
        mysqli_stmt_bind_param($hazirlik, "i" ,$silme_kategori_id);
        mysqli_stmt_execute($hazirlik);
 };











?>