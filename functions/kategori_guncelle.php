<?php
require_once __DIR__ . '/../db/db.php';

function kategoriGuncelleme($guncelleme_kategori_adi, $guncelleme_kategori_aciklama, $guncelleme_kategori_id) {
    global $baglanti;
    
    $sorgu = "UPDATE kategori SET kategori_adi = ? ,aciklama = ?  WHERE id=? ";
    $hazirlik = mysqli_prepare($baglanti, $sorgu);
    mysqli_stmt_bind_param($hazirlik, "ssi", $guncelleme_kategori_adi, $guncelleme_kategori_aciklama, $guncelleme_kategori_id);
    mysqli_stmt_execute($hazirlik);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["guncelleme_kategori_adi"]) && isset($_POST["kategori_aciklama"])) {
    $guncelleme_kategori_id = $_POST["id"];
    $guncelleme_kategori_adi = $_POST["guncelleme_kategori_adi"];
    $guncelleme_kategori_aciklama = $_POST["kategori_aciklama"];
    
    kategoriGuncelleme($guncelleme_kategori_adi, $guncelleme_kategori_aciklama, $guncelleme_kategori_id);
    
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
?>