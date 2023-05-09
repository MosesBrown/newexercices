<?php

$phrase = "Ceci est une chaîne de caractère.";
$mots = explode(" ", $phrase); // On sépare la phrase en mots

foreach ($mots as $mot) {
  echo $mot . "<br>"; // On affiche chaque mot suivi d'un saut de ligne
}

?>
