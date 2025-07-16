<?php
$commandes = [
    ["client" => "Alice",  "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob",    "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David",  "montant_ht" => 50,  "statut" => "en attente"]
];

define("TVA", 0.20); // TVA

$ca_ht_total = 0;
$ca_ttc_total = 0;
$impayes_ht = 0;

foreach ($commandes as $commande) {
    $client = $commande["client"];
    $montant_ht = $commande["montant_ht"];
    $ttc = $montant_ht * (1 + TVA);
    $statut = $commande["statut"];

    echo "Commande de $client : $montant_ht € HT, " . number_format($ttc, 2, ',', ' ') . " € TTC – $statut<br>";

    $ca_ht_total += $montant_ht;
    $ca_ttc_total += $ttc;

    if ($commande["statut"] === "en attente") {
        $impayes_ht += $montant_ht;
    }
}

// Pourcentage d’impayés
$pourcentage_impaye = ($impayes_ht / $ca_ht_total) * 100;

echo "<br>Chiffre d'affaires total HT : $ca_ht_total €";
echo "<br>Chiffre d'affaires total TTC : " . number_format($ca_ttc_total, 2, ',', ' ') . " €";
echo "<br>Montant non réglé : $impayes_ht € HT";
echo "<br>Pourcentage du CA non réglé : " . round($pourcentage_impaye, 2) . " %";
?>
