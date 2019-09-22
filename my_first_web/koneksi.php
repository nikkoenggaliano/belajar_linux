<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "ganti_ini";


try{
	$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);	
}catch(PDOException $error){
	echo $error->getMessage();
	echo "<br>Silahkan check file <b>koneksi.php</b> untuk konfigurasi";
	exit;
}
