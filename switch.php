<?php
$age = 21;

switch ($age) {
    case ($age >= 18):
        echo "Je suis majeur";
        break;
    case ($age < 18):
        echo "Je suis mineur";
        break;
    default:
        echo "Y a un problème";
        break;
}
?>
