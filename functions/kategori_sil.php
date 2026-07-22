<?php
require_once __DIR__ . '/../db/db.php';
    $silme_kategori_id ="";

 

    function kategoriSil($silme_kategori_id){

        global $baglanti;

        $sorgu = "DELETE FROM kategori WHERE id = ?";
        $hazirlik = mysqli_prepare($baglanti,$sorgu);
        mysqli_stmt_bind_param($hazirlik, "i" ,$silme_kategori_id);
        mysqli_stmt_execute($hazirlik);

    }

   if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"]) && !isset($_POST["guncelleme_kategori_adi"])) {
    
    $gelen_id = $_POST["id"];

    kategoriSil($gelen_id);

    header("Location: ../views/kategori/kategori.php");
    exit; 
}

    
    
    




?>