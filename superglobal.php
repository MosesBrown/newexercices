<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Bonjour ".$name." !";
} else {
    echo "Le paramètre 'name' n'a pas été envoyé.";
}
?>
