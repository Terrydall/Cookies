<?php
//var_dump($GLOBALS);
$serveur = $_session = $_SERVER['HTTP_USER_AGENT'];
$ip = $_session = $_SERVER['REMOTE_ADDR'];
$name = $_session = $_SERVER['SERVER_SOFTWARE'];



echo " <br>Votre USER Agent est : $serveur <br>";
echo "Votre adresse IP est : $ip <br>";
echo "Votre nom de serveur est : $name <br>";


include 'menu.php';