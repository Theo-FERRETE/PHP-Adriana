<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["color"])) {
    $color = htmlspecialchars($_POST["color"]);


    $couleurs = [
        "red" => "Rouge",
        "green" => "Vert",
        "blue" => "Bleu"
    ];

    if (array_key_exists($color, $couleurs)) {
        echo "<h1 style='color:$color;'>Vous avez choisi la couleur " . $couleurs[$color] . "</h1>";
    }
}
?>