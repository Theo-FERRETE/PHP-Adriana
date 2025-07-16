<?php

function calculImpots($revenu) {
    $tranches = [
        [0,      9999,  0],
        [10000,  19999, 0.10],
        [20000,  34999, 0.18],
        [35000,  49999, 0.25],
        [50000,  PHP_INT_MAX, 0.35]
    ];

    $impot = 0;

    foreach ($tranches as $tranche) {
        $min = $tranche[0];
        $max = $tranche[1];
        $taux = $tranche[2];

        if ($revenu > $min) {
            $partImposable = min($revenu, $max) - $min;
            $impot += $partImposable * $taux;
        } else {
            break; // Si le revenu est inférieur à la tranche, on arrête
        }
    }

    return $impot;
}

echo "Impôt pour 16 000€ : " . calculImpots(16000) . " €<br>";     
echo "Impôt pour 38 000€ : " . calculImpots(38000) . " €<br>";     
echo "Impôt pour 64 000€ : " . calculImpots(64000) . " €<br>";     
?>
