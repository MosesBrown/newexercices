<?php

$chiffre = 25;
$nombre = 17;

if ($chiffre > $nombre) {
    echo "Le plus grand nombre est : " . $chiffre;
} elseif ($nombre > $chiffre) {
    echo "Le plus grand nombre est : " . $nombre;
} else {
    echo "Les deux nombres sont égaux.";
}
