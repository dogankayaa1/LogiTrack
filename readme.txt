-Proje spaghetti kod ile yapıldı. 
-Temel nedeni spaghetti kod ile ürettiğim projeyi daha sonra oop öğrenince mvc mimarisine gecirmek.
-Daha sonra bir framework kullanarak yine projeyi framework e aktarmak.
-Öğrenme sürecimin daha kaliteli olacağını düşünüyorum bu durumda.
-Süreçte ilerlemelerimi konu ve konu ile yaptığım araştırma ve konunun bitimine kadar olan süreyi kaydedeceğim.
-Projenin ön yüzü google stitch ile tasarlandı 
-Araştırmalarımda AI yapay zeka dan faydalandım.


1. Aşama klasör yapısı oluşturma.
- Toplam süre 4:14 Dakika.
- db klasörü oluşturuldu database bağlantısının yer alacağı alan
-functions kod tekrarını önlemek için fonksiyonların yer alacağı alan ve her sayfa için ayrı fonksiyon klasörü oluşturuldu. Temel amacım,
kullanmadığım fonksiyonları diğer sayfalarda çağırmamak,fonksiyon dosyalarının karmaşasını engellemek,spaghetti olsa bile ilk bakışta neyin nerede olabileceğini tahmin edebilmek.
-views klasörü oluşturuldu ve her sayfa için klasör oluşturuldu.

2. Aşama Database
-Toplam Süre 10:00 Dakika.
-Mysql kullanacağım projede gereksinimlerimi karşılayacağını düşünüyorum
-Mysql veri tabanı bağlantısında 2 farklı yöntem var. Mysqlli ,PDO 
-Mysqlli sadece mysql kullanımı için var. Güvelik konularında kendimiz manuel yapmak zorunda kalıyoruz.
-PDO ise bir cok veri tabanı bağlantısını destekliyor. PostgreSQL, SQL Server veya SQLite gibi. Ayrıca sektörde PDO daha cok öneriliyor OOP bilmek gerekiyor muş.
- PDO güvenli olduğu için https://www.php.net/manual/tr/book.pdo.php dokümantasyondan baktım ama evet bişey anlamadım görmediğim eğitimini almadığım bilgiler var. Bilmediğim için ileride OOP öğrenince PDO kullanacağım. 
-Veri tabanı İşlemlerinde Mysqlli Kullanmaya karar veridim.

3.Aşama Database Bağlantı Kodlarının Oluşturulması.
db/db.php Dosyasının Kodlarının Oluşturulması araştırma 25:00 Dakika.
-Bağlantı Güvenliği logların dışarı sızması önlendi. Şimdilik hataları sunucu loglarına göndermedim İleride çok büyük dersler cıkara bilirim hata alıp bulamayınca.

4. Aşama views Dosyalarının oluşturulması
-Toplam süre 4:00 Dakika.
Yönlendirme (index.php dosyası ile header location kullanarak views klasörüne yönlendirme yaptım. .htaccess kullanmak lazım ama bilmediğim için bildiğim yola başvurdum ai ye yaptırmadım sonra öğrenip kendim yapmak istedim. Bu bana borç olarak dönecek ama kücük olduğı için şimdikik geçtim.)
-Ana sayfa iskeletini ekledim
