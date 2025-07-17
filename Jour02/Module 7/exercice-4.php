<?php
$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

// Fonction pour calculer la moyenne
function calculerMoyenne($eleve) {
    unset($eleve["prenom"]);
    $somme = 0;
    foreach ($eleve as $note) {
        $somme += $note;
    }
    return $somme / count($eleve);
}

// Fonction pour afficher le résultat d’un élève donné
function afficherResultatEleve($prenomRecherche, $classe) {
    foreach ($classe as $eleve) {
        if (strtolower($eleve["prenom"]) === strtolower($prenomRecherche)) {
            $moyenne = calculerMoyenne($eleve);
            $admission = $moyenne >= 10 ? "Admis ✅" : "Refusé ❌";
            echo "{$eleve['prenom']} a une moyenne de " . round($moyenne, 2) . " : $admission<br>";
            return;
        }
    }
    echo "Aucun élève trouvé avec le prénom : $prenomRecherche";
}

afficherResultatEleve("Lucie", $classe);

