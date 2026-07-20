<?php
require_once '../../db/db.php';

$kullanici_adi = "";
$sifre = "";





function login($kullanici_adi, $sifre)
{
    global $baglanti;
    if (!empty($kullanici_adi) && !empty($sifre)) {
        $sql = "SELECT id ,eposta,sifre FROM user WHERE eposta = ? LIMIT 1";
        $stmt = mysqli_prepare($baglanti, $sql);
        mysqli_stmt_bind_param($stmt, "s", $kullanici_adi);
        mysqli_stmt_execute($stmt);
        $sonuc = mysqli_stmt_get_result($stmt);
        if (!empty($row = mysqli_fetch_assoc($sonuc))) {
            if ($row["eposta"] === $kullanici_adi && password_verify($sifre,$row["sifre"])) {
                $_SESSION["eposta"] = $row["eposta"];
                return true;
            } else {
                echo '
<p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-center font-medium">
    <svg class="w-4 h-4 mr-1.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
    </svg>
    Kullanıcı adı veya şifre yanlış.
</p>';
echo $sifre;
            }
        }
    } else {
        echo "kullanıcı adı veya şifre boş";
    }
};
