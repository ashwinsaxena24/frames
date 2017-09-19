<?php
if(empty($ping) || $ping != 'pong') 
	header("Location: ../index.php");
define('HOST','localhost');
define('USER','hitman');
define('PASS','Password81#(');
define('DATABASE','frames');
define('UPLOADPATH','../i/');
define('UPLOADPATH2','i/');
$categories = array('animals','birds','festivals','models','objects','sceneries','specials');
?>
