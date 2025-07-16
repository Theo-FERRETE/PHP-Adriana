<?php

$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

// Moyenne et appréciation de chaque élève 
echo "<h3>Moyenne des élèves :</h3>";

foreach ($eleves as $nom => $notes) {
    $somme = 0;
    $nbMatiere = count($notes);

    foreach ($notes as $note) {
        $somme += $note;
    }

    $moyenne = $somme / $nbMatiere;
    $appreciation = "";

    if ($moyenne < 10) {
        $appreciation = "Échec";
    } elseif ($moyenne < 12) {
        $appreciation = "Peut mieux faire";
    } elseif ($moyenne <= 15) {
        $appreciation = "Bon travail";
    } else {
        $appreciation = "Excellent";
    }

    echo "$nom : moyenne = " . round($moyenne, 2) . " → $appreciation<br>";
}

//Moyenne de la classe par matière 
echo "<h3>Moyenne de la classe par matière :</h3>";

$matiere_totaux = [];
$matiere_counts = [];

// Accumulation des notes par matière
foreach ($eleves as $notes) {
    foreach ($notes as $matiere => $note) {
        if (!isset($matiere_totaux[$matiere])) {
            $matiere_totaux[$matiere] = 0;
            $matiere_counts[$matiere] = 0;
        }
        $matiere_totaux[$matiere] += $note;
        $matiere_counts[$matiere]++;
    }
}

// Calcul et affichage des moyennes par matière
foreach ($matiere_totaux as $matiere => $somme) {
    $moyenne = $somme / $matiere_counts[$matiere];
    echo ucfirst($matiere) . " : " . round($moyenne, 2) . "/20<br>";
}
?>
