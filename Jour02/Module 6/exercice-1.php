<?php
// Villes initial
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

// Affiche "Marseille"
echo "" . $villes[4] . "<br>";

//Remplacer Monaco par "Nice"
$villes[0] = "Nice";

// Ajout de Reims
$villes[] = "Reims";

// Affiche le nombre de villes
echo "Nombre de villes :" . count($villes) . "<br>";

// Affiche toutes les villes avec foreach
echo "Liste des villes :<br>";
foreach ($villes as $ville) {
    echo "- $ville<br>";
}
?>

