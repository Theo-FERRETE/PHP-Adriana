<?php

$commandes = [
    ['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
    ['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
    ['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
    ['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
    ['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
    ['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
    ['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
    ['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
    ['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00, 'etat' => 'impayé'],
    ['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
    ['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
    ['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
    ['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
    ['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
    ['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
    ['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
    ['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
    ['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
    ['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
    ['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
    ['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
    ['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
    ['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
    ['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
    ['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
    ['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
    ['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
    ['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
    ['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
    ['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
];

$coutsProduction = [
    'Invisibilité'   => 15.00,
    'Explosion'      => 10.00,
    'Mémoire'        => 14.00,
    'Courage'        => 12.00,
    'Puissance'      => 18.00,
    'Rêves'          => 13.00,
    'Charme'         => 11.00,
    'Métamorphose'   => 20.00,
    'Loup-Garou'     => 22.00,
    'Caméléon'       => 16.00,
    'Sérénité'       => 25.00,
    'Concentration'  => 17.00,
];

$totalCommandes = count($commandes);
$impayees = 0;
$preparation = 0;
$clients = [];
$caTotal = 0;
$caImpayé = 0;
$caPreparation = 0;
$coutProductionTotal = 0;

$statistiquesParPotion = [];

foreach ($commandes as $commande) {
    $etat = $commande['etat'];
    $client = $commande['client'];
    $potion = $commande['potion'];
    $prix = $commande['prix'];
    $coutProduction = $coutsProduction[$potion];

    $clients[$client] = true;

    if ($etat === 'impayé') {
        $impayees++;
        $caImpayé += $prix;
    } elseif ($etat === 'préparation') {
        $preparation++;
        $caPreparation += $prix;
    } elseif ($etat === 'payé') {
        $caTotal += $prix;
        $coutProductionTotal += $coutProduction;
    }

    if (!isset($statistiquesParPotion[$potion])) {
        $statistiquesParPotion[$potion] = [
            'quantite' => 0,
            'prix_unitaire' => $prix,
            'ca' => 0,
            'cout_total' => 0,
            'benefice' => 0,
        ];
    }

    if ($etat === 'payé' || $etat === 'préparation') {
        $statistiquesParPotion[$potion]['quantite']++;
        $statistiquesParPotion[$potion]['ca'] += $prix;
        $statistiquesParPotion[$potion]['cout_total'] += $coutProduction;
        $statistiquesParPotion[$potion]['benefice'] += $prix - $coutProduction;
    }
}

$beneficeTotal = $caTotal - $coutProductionTotal;
$nbClients = count($clients);
$totalGlobal = $caTotal + $caImpayé + $caPreparation;
$pourcentageImpayé = $caImpayé / $totalGlobal * 100;
$pourcentagePreparation = $caPreparation / $totalGlobal * 100;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Potions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-6">

    <h1 class="text-3xl font-bold mb-4">🧪 Tableau de bord - Boutique de Potions</h1>

    <div class="space-y-2 mb-6">
        <p><strong>✅ Commandes :</strong> <?= $totalCommandes ?></p>
        <p><strong>💸 Impayées :</strong> <?= $impayees ?></p>
        <p><strong>⏳ Préparation :</strong> <?= $preparation ?></p>
        <p><strong>👥 Clients différents :</strong> <?= $nbClients ?></p>
        <p><strong>💰 CA total (payé) :</strong> <?= number_format($caTotal, 2) ?> €</p>
        <p><strong>📉 CA impayé :</strong> <?= number_format($caImpayé, 2) ?> € (<?= number_format($pourcentageImpayé, 2) ?>%)</p>
        <p><strong>🧪 CA en préparation :</strong> <?= number_format($caPreparation, 2) ?> € (<?= number_format($pourcentagePreparation, 2) ?>%)</p>
        <p><strong>🪙 Bénéfice total :</strong> <?= number_format($beneficeTotal, 2) ?> €</p>
    </div>

    <h2 class="text-2xl font-semibold mb-4">📊 Statistiques par potion</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded">
            <thead>
                <tr class="bg-blue-600 text-white text-left">
                    <th class="p-3">Potion</th>
                    <th class="p-3">Quantité</th>
                    <th class="p-3">Prix unitaire</th>
                    <th class="p-3">Chiffre d'affaires</th>
                    <th class="p-3">Coût production</th>
                    <th class="p-3">Bénéfice</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statistiquesParPotion as $nom => $stats): ?>
                    <tr class="border-t hover:bg-gray-100">
                        <td class="p-3"><?= $nom ?></td>
                        <td class="p-3"><?= $stats['quantite'] ?></td>
                        <td class="p-3"><?= number_format($stats['prix_unitaire'], 2) ?> €</td>
                        <td class="p-3"><?= number_format($stats['ca'], 2) ?> €</td>
                        <td class="p-3"><?= number_format($stats['cout_total'], 2) ?> €</td>
                        <td class="p-3"><?= number_format($stats['benefice'], 2) ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
