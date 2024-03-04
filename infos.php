<?php

session_start();
$_SESSION['nom'] = 'DESCHAMPS';
$_SESSION['prenom'] = 'Delphine';
$_SESSION['age'] = 40;



echo "Votre nom est :". $_SESSION['nom']. "<br>";
echo "Votre prénom est :". $_SESSION['prenom']."<br>";
echo "Votre âge est : ". $_SESSION['age']. "<br>";


include 'menu.php';

