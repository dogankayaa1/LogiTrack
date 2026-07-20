<?php
// Canlı Ortamda aktif Edilmesi gerekiyor aksi durumda veri tabanı çökmlerinde yada hatalarında bilgi sızıntısı olabilir
//mysqli_report(MYSQLI_REPORT_OFF);

$host ="dogan-db-new";
$username = "root";
$password = "123456";
$dbName = "test";

// Bağlantı hatalarında php nin de uyarı vermesini engellemek için @ kullanılıyor muş test ettim onayladım.
// veri tabanını sildi hata Warning: mysqli_connect(): (HY000/1049): Unknown database 'test' in /var/www/html/logitrack/db/db.php on line 12
// Bağlantı hatası
// @ sonrası hata sustu.
// yaptığım en büyük hata hatayı susturmak mış anladım @ işaretini geri kaldırdım.
// AI nin her önerdiğini yapmamak lazım mış anladım. @ koy hata susar yazmıştı. hata susutu ama benim hatayı susturmamam lazım


$baglanti = mysqli_connect($host,$username,$password,$dbName);

if(!$baglanti){
    die("Bağlantı hatası");
}else{
   
};

if(!mysqli_set_charset($baglanti ,"utf8mb4")){

    error_log("Karakter Set Uyuşmazlığı" . mysqli_error($baglanti));
    mysqli_close($baglanti);
    die("Sistem Hatası Oluştu ");
}





?>