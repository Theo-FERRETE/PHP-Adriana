<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Classement des équipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 p-8">

<?php

define("VICTORY_POINTS", 3);
define("DRAW_POINTS", 1);

// Tableau des équipes avec buts
$teams = [
    "Monaco" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ],
    "Rennes" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ],
    "OM" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ],
    "Lille" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ],
    "Lyon" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ],
    "PSG" => [
        "points" => 0,
        "matches_played" => 0,
        "victories" => 0,
        "draws" => 0,
        "defeats" => 0,
        "goals_scored" => 0
    ]
];

function playMatch($team1, $team2) {
    $team1_score = rand(0, 5);
    $team2_score = rand(0, 5);
    return ['team1_score' => $team1_score, 'team2_score' => $team2_score];
}

function updateStats(&$teams, $team1, $team2, $score1, $score2) {
    $teams[$team1]['matches_played']++;
    $teams[$team2]['matches_played']++;

    // Stats buts 
    $teams[$team1]['goals_scored'] += $score1;
    $teams[$team2]['goals_scored'] += $score2;

    if ($score1 > $score2) {
        $teams[$team1]['victories']++;
        $teams[$team1]['points'] += VICTORY_POINTS;
        $teams[$team2]['defeats']++;
    } elseif ($score1 == $score2) {
        $teams[$team1]['draws']++;
        $teams[$team2]['draws']++;
        $teams[$team1]['points'] += DRAW_POINTS;
        $teams[$team2]['points'] += DRAW_POINTS;
    } else {
        $teams[$team2]['victories']++;
        $teams[$team2]['points'] += VICTORY_POINTS;
        $teams[$team1]['defeats']++;
    }
}

//  RÉSULTATS DES MATCHS 
echo "<h2 class='text-2xl font-bold mb-4'>📊 Résultats des matchs</h2>";
echo "<table class='table-auto w-full mb-8 bg-white rounded shadow'>";
echo "<thead><tr class='bg-gray-200'>
        <th class='p-2'>Équipe 1</th>
        <th class='p-2'>Score</th>
        <th class='p-2'>Équipe 2</th>
        <th class='p-2'>Score</th>
    </tr></thead><tbody>";

$teamNames = array_keys($teams);
for ($i = 0; $i < count($teamNames); $i++) {
    for ($j = $i + 1; $j < count($teamNames); $j++) {
        $team1 = $teamNames[$i];
        $team2 = $teamNames[$j];

        $result = playMatch($team1, $team2);
        $score1 = $result['team1_score'];
        $score2 = $result['team2_score'];

        echo "<tr class='text-center border-t'>
            <td class='p-2'>$team1</td>
            <td class='p-2'>$score1</td>
            <td class='p-2'>$team2</td>
            <td class='p-2'>$score2</td>
        </tr>";

        updateStats($teams, $team1, $team2, $score1, $score2);
    }
}
echo "</tbody></table>";

// Tri du classement
uasort($teams, function($a, $b) {
    if ($b["points"] === $a["points"]) {
        if ($b["victories"] === $a["victories"]) {
            return $b["goals_scored"] <=> $a["goals_scored"];
        }
        return $b["victories"] <=> $a["victories"];
    }
    return $b["points"] <=> $a["points"];
});

//  CLASSEMENT FINAL
echo "<h2 class='text-2xl font-bold mb-4'>🏁 Classement final</h2>";
echo "<table class='table-auto w-full bg-white rounded shadow'>";
echo "<thead><tr class='bg-gray-200'>
    <th class='p-2'>Rang</th>
    <th class='p-2'>Équipe</th>
    <th class='p-2'>Points</th>
    <th class='p-2'>Victoires</th>
    <th class='p-2'>Nuls</th>
    <th class='p-2'>Défaites</th>
    <th class='p-2'>Matchs joués</th>
    <th class='p-2'>Buts marqués</th>
</tr></thead><tbody>";

$rank = 1;
foreach ($teams as $name => $stats) {
    echo "<tr class='text-center border-t'>
        <td class='p-2'>$rank</td>
        <td class='p-2'>$name" . ($rank === 1 ? " 🏆" : "") . "</td>
        <td class='p-2'>{$stats['points']}</td>
        <td class='p-2'>{$stats['victories']}</td>
        <td class='p-2'>{$stats['draws']}</td>
        <td class='p-2'>{$stats['defeats']}</td>
        <td class='p-2'>{$stats['matches_played']}</td>
        <td class='p-2'>{$stats['goals_scored']}</td>
    </tr>";
    $rank++;
}
echo "</tbody></table>";

// === PODIUM ===
echo "<h2 class='text-xl font-semibold mt-10 mb-4'>🎉 Podium</h2>";
$top3 = array_slice($teams, 0, 3, true);
$places = ['🥇' => 'bg-yellow-400', '🥈' => 'bg-gray-400', '🥉' => 'bg-amber-600'];
$i = 0;

echo "<div class='flex justify-center gap-6'>";
foreach ($top3 as $team => $stats) {
    $emoji = array_keys($places)[$i];
    $bgColor = array_values($places)[$i];

    echo "<div class='$bgColor text-white rounded-lg shadow-md px-6 py-4 text-center w-40'>
            <div class='text-3xl mb-2'>$emoji</div>
            <div class='text-lg font-bold'>$team</div>
            <div class='text-sm'>Points : {$stats['points']}</div>
        </div>";
    $i++;
}
echo "</div>";

?>

</body>
</html>
