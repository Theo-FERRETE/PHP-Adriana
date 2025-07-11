<?php
// Déclaration de la constante
define("TVA", 0.2);

// Variable prix HT
$prixHT = 100;

// Calcul du prix TTC
$prixTTC = $prixHT * (+ TVA);

// Affichage du prix TTC
echo "Le prix TTC est de " . $prixTTC . " €.";
?>
