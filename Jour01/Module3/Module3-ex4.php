<?php
// Déclaration des variables
$a = 5;
$b = 10;
$c = 3;

// Ajout 
$b += $a;
echo "Après addition, b vaut $b<br>"; 

// Multiplication 
$b *= $c;
echo "Après multiplication, b vaut $b<br>"; 

// Division 
$b /= $a;
echo "Après division, b vaut $b<br>"; 

// Soustraction
$b -= $c;
echo "Après soustraction, b vaut $b<br>"; 

// Reste de la division de $b par $c
$b %= $c;
echo "Le reste de b divisé par c est $b<br>";
?>
