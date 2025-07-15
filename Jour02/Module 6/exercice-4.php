<?php
$temperatures = [30, 32, 34, 30, 35, 34, 31];

//Calcul de la température moyenne 
$sum = 0;
$count = 0;

foreach ($temperatures as $temp) {
    $sum += $temp;
    $count++;
}

$moyenne = $sum / $count;
echo "Température moyenne sur 7 jours : " . round($moyenne, 2) . "°C<br>";

// Affiche le nombre total de relevés
echo "Nombre de relevés : $count";
?>
