<?php session_start();
if(empty($_SESSION["eposta"])){
    echo "Oturum Bulunamadı";
}else{
    echo 'Merhaba '.$_SESSION["eposta"] ;
}




?>