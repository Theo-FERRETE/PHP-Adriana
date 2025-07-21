<?php

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";


$elements = explode(",", $panier);


$produits = [];


foreach ($elements as $element) {
    
    $couple = explode(":", $element);

    if (count($couple) !== 2) {
        continue; 
    }

    $nom = strtolower(trim($couple[0]));
    $prix = trim($couple[1]);

    if (is_numeric($prix)) {
        $produits[$nom] = (float)$prix;
    }
}


print_r($produits) . "<br>";


echo "Nombre de produits valides : " . count($produits) . "<br>";


$total = array_sum($produits);
echo " Prix total du panier : " . number_format($total, 2) . " €<br>";

?>