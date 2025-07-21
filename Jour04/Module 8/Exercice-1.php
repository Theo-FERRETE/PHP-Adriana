<?php
$chaine = "12,5,abc,32,-7,42";

$tableau = explode(',', $chaine);

$nombres_valides = [];

// Filter les éléments numériques
foreach ($tableau as $element) {
    if (is_numeric($element)) {
        $nombres_valides[] =
    intval($element);
    }
}

var_dump($nombres_valides);

echo "le plus petit nombre est : " . min($nombres_valides) . "\n";
echo "le plus grand nombre est : " . max($nombres_valides) . "\n";

?>