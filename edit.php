<?php
include 'index.php';

$animal = isset($_COOKIE ['animal']) ? $_COOKIE['animal'] : "";
$couleur = isset($_COOKIE['couleur']) ? $_COOKIE['couleur'] : "";
//Si la variable animal existe dans cookie alors il prend la valeur, sinon valeur vide

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
  $animal2 = $_POST["animal"];
  $couleur2 = $_POST["couleur"];

  setcookie('animal', $animal2, time() + (60 * 2), "/");
  setcookie('couleur', $couleur2, time() + (60 * 2), "/"); 
  
}

?>

<form method="Post" action="edit.php">

<label for="animal"> Votre animal préféré : </label>
<input name="animal" type="text" value="<?php echo $animal;?>"><br>

<label for="couleur"> Votre couleur préférée : </label>
<input name="couleur" type="text" value="<?php echo $couleur;?>"><br>

<button name="submit">Valider</button>

</form>