<?php

function afficherEtoile($nbr) {
    for ($i = 1; $i <= $nbr; $i++) {
        echo "*";
    }
    echo "<br>"; // retour à la ligne 
}

// Affichage des étoiles en ligne (1 à 25)
for ($i = 1; $i <= 5; $i++) {
    afficherEtoile($i);
}
?>
