<?php
// Valeur TVA
define('TVA', 0.20);

// Taille 
$size = "M"; 

// prix HT 
switch ($size) {
    case "S":
        $priceHT = 10;
        break;
    case "M":
        $priceHT = 12;
        break;
    case "L":
        $priceHT = 14;
        break;
    case "XL":
        $priceHT = 16;
        break;
    default:
        echo "Taille inconnue";
        exit();
}

// Calcul TTC
$priceTTC = $priceHT * (1 + TVA);

echo "Le prix du t-shirt taille $size est de " . number_format($priceTTC, 2, ',', ' ') . " € TTC ($priceHT € HT + " . (TVA * 100) . "% TVA).";
?>
