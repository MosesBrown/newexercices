<?php
function multiplication($a, $b) {
    // Cas de base
    if ($b == 0) {
        return 0;
    }
    
    // Récursion
    return $a + multiplication($a, $b-1);
}
$resultat = multiplication(3, 4);
echo $resultat; // Affiche 12
