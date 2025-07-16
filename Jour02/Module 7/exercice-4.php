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

// calculer la moyenne
function calculerMoyenne($eleve) {
    // On enlève le prénom avant de faire la moyenne
    unset($eleve["prenom"]);
    $somme = 0;
    $nbNotes = count($eleve);
    
    foreach ($eleve as $note) {
        $somme += $note;
    }
    
    return $somme / $nbNotes;
}

// Fonction pour savoir si l’élève est admis
function estAdmis($moyenne) {
    return $moyenne >= 10;
}

foreach ($classe as $eleve) {
    $prenom = $eleve["prenom"];
    $moyenne = calculerMoyenne($eleve);
    $admission = estAdmis($moyenne) ? "Admis ✅" : "Refusé ❌";
    
    echo "$prenom a une moyenne de " . round($moyenne, 2) . " : $admission<br>";
}
?>
