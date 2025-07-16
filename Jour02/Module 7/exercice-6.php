<?php
function afficherTableMultiplication($nombre) {
    echo "Table de multiplication de $nombre :<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat<br>";
    }
    echo "<br>"; 
}

// Exemples d'utilisation
afficherTableMultiplication(2);
?>