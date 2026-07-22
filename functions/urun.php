<?php
require_once __DIR__.'../../db/db.php';


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["urun_kodu"]) && isset($_POST["urun_adi"]) && isset($_POST["urun_kategori"]) && isset($_POST["urun_fiyat"]) && isset($_POST["urun_baslangic_stok"]) && isset($_POST["urun_kritik_stok"])){

$urun_kodu = $_POST["urun_kodu"];
$urun_adi = $_POST["urun_adi"];
$urun_kategori = $_POST["urun_kategori"];
$urun_fiyat = $_POST["urun_fiyat"];
$urun_baslangic_stok = $_POST["urun_baslangic_stok"];
$urun_kritik_stok = $_POST["urun_kritik_stok"];

function urunEkleme($urun_kodu,$urun_adi,$urun_kategori,$urun_fiyat,$urun_baslangic_stok,$urun_kritik_stok){

global $baglanti;

    $sorgu = "INSERT INTO urun (urun_kodu,urun_adi,kategori,fiyat,baslangic_stok,kritik_stok) VALUES (?,?,?,?,?,?)";
    $hazirlik = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($hazirlik, ("sssiii"),$urun_kodu,$urun_adi,$urun_kategori,$urun_fiyat,$urun_baslangic_stok,$urun_kritik_stok);
    mysqli_stmt_execute($hazirlik);
    header("Location:../views/urun/urun.php");
}

urunEkleme($urun_kodu,$urun_adi,$urun_kategori,$urun_fiyat,$urun_baslangic_stok,$urun_kritik_stok);

}


function urunGetir(){
    global $baglanti;
    $sorgu = "SELECT id ,urun_kodu,urun_adi,kategori,fiyat,baslangic_stok,kritik_stok FROM urun";
    $hazirlik = mysqli_query($baglanti,$sorgu);
    $urun = [];
    while($gelen =mysqli_fetch_assoc($hazirlik)){
    $urun[] = $gelen;
    }
    return $urun;
}



function urunGuncelleme($urun_id,$urun_adi,$urun_kategori,$urun_fiyat,$urun_baslangic_stok,$urun_kritik_stok){
global $baglanti;

$sorgu = "UPDATE urun SET urun_adi =? , kategori = ?, fiyat = ? , baslangic_stok = ?, kritik_stok = ? WHERE id = ? ";
$hazirlik = mysqli_prepare($baglanti,$sorgu);
mysqli_stmt_bind_param($hazirlik, "ssiiii", $urun_adi, $urun_kategori, $urun_fiyat, $urun_baslangic_stok, $urun_kritik_stok, $urun_id);
 mysqli_stmt_execute($hazirlik);
 mysqli_stmt_close($hazirlik);

header("Location:../views/urun/urun.php");
exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) && !empty($_POST["id"])){
    
    $urun_id = $_POST["id"];
    $urun_adi = $_POST["urun_adi"];
    $urun_kategori = $_POST["urun_kategori"];
    $urun_fiyat = $_POST["urun_fiyat"];
    $urun_baslangic_stok = $_POST["baslangic_stok"];
    $urun_kritik_stok = $_POST["kritik_stok"];

urunGuncelleme($urun_id, $urun_adi, $urun_kategori, $urun_fiyat, $urun_baslangic_stok, $urun_kritik_stok);



}



function urunSilme($urun_silme){
    global $baglanti;
    $sorgu = "DELETE FROM urun WHERE  id = ? ";
    $hazirlik = mysqli_prepare($baglanti,$sorgu);
    mysqli_stmt_bind_param($hazirlik, "i" ,$urun_silme);
    mysqli_stmt_execute($hazirlik);
    mysqli_close($baglanti);



}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["silme_id"])){
    $urun_silme = $_POST["silme_id"];
    urunSilme($urun_silme);
    header("Location:../views/urun/urun.php");
exit();

}









?>