<?php
function ajouter_cinq($entier) {
    $resultat = $entier + 5;
    return $resultat;
  }
  
  $nombre = 10;
$resultat = ajouter_cinq($nombre);
echo "Le résultat est : " . $resultat;
