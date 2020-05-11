<?php
$host="localhost";
$db="mydb";
$user="b1812100001@sakarya.edu.tr";
$pass="123";

 
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('latin5',$conn);
?>