<?php 
$chaine = "Ceci est une chaîne de caractère.";
$sous_chaine = substr($chaine, strpos($chaine, "est une chaîne"), strlen("est une chaîne"));
echo $sous_chaine; // affiche "est une chaîne"
