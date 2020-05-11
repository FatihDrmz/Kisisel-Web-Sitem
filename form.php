<!DOCTYPE html>
<html>
<header>
<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

if(isset($_POST['gönder']))
{
    $_kullanıcıadı=$_POST['kullanıcıadı'];
    $_email=$_POST['email'];
    $_cinsiyet=$_POST['cinsiyet'];
    $_memleketiniz=$_POST['memleketiniz'];
    $_begendiginizkısım=$_POST['bölüm'];
    $_mesaj=$_POST['mesaj'];

    echo "<strong>Kullanıcı Adı:</strong> $_kullanıcıadı <br>";
    echo "<strong>E-mail:</strong> $_email <br>";
    echo "<strong>Cinsiyet:</strong> $_cinsiyet <br>";
    echo "<strong>Memleketiniz:</strong> $_memleketiniz <br>";
    echo "<strong>En beğendiniz kısım:</strong>  $_begendiginizkısım <br>";
    echo "<strong>Mesaj:</strong> $_mesaj";
}
?>
</header>
<body>
</body>
</html>