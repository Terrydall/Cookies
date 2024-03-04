<?php



if (isset($_POST["submit"])) {

$animal = $_POST["animal"];
$couleur = $_POST["couleur"];

setcookie('animal', $animal, time() + (60 * 2), "/");
setcookie('couleur', $couleur, time() + (60 * 2), "/"); 

}





?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<label> Votre animal préféré : </label>
<input name="animal" type="text"><br>

<label> Votre couleur préférée : </label>
<input name="couleur" type="text"><br>

<button name="submit">Valider</button>

</form> 

<?php
include 'menu.php';
?>