<?php
$produits = [
    ["nom" => "T-shirt",   "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull",      "prix" => 25, "stock" => 8]
];

//Affiche le stock de casquettes 
foreach ($produits as $produit) {
    if ($produit["nom"] === "Casquette") {
        echo "Stock de casquettes : " . $produit["stock"] . "<br>";
        break;
    }
}

// 2. Ajouter un lot de 25 vestes à 40€
$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

//Affiche l'inventaire en tableau HTML
echo "<h3>Inventaire du stock</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Produit</th><th>Prix (€)</th><th>Stock</th><th>CA potentiel (€)</th></tr>";

foreach ($produits as $p) {
    $ca = $p["prix"] * $p["stock"];
    echo "<tr>
            <td>{$p['nom']}</td>
            <td>{$p['prix']}</td>
            <td>{$p['stock']}</td>
            <td>$ca</td>
          </tr>";
}
