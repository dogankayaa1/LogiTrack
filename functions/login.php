<?php ob_start(); 

require_once '../../db/db.php';

$kullanici_adi = "";
$sifre = "";





function login($kullanici_adi,$sifre)
{
    global $baglanti;
    if (!empty($kullanici_adi) && !empty($sifre)) {
        $sql = "SELECT id ,eposta,sifre ,yetki FROM user WHERE eposta = ? LIMIT 1";
        $stmt = mysqli_prepare($baglanti, $sql);
        mysqli_stmt_bind_param($stmt, "s", $kullanici_adi);
        mysqli_stmt_execute($stmt);
        $sonuc = mysqli_stmt_get_result($stmt);
        mysqli_close($baglanti);

        if (!empty($row = mysqli_fetch_assoc($sonuc))) {
            if ($row["eposta"] === $kullanici_adi && password_verify($sifre,$row["sifre"])) {
                session_start();
                $_SESSION["eposta"] = $row["eposta"];
                $_SESSION["yetki"] = $row["yetki"];
             return header("Location:../../views/admin/yonetim-paneli.php");
            } else {
                echo "Kullanici Adi Veya Şifre Yanlış";
            }
        }
    } else {
        echo "kullanıcı adı veya şifre boş";
    }
};
