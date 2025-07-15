<?php
$jour = "lundi"; 

switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo "$jour est un jour ouvré.";
        break;

    case "samedi":
    case "dimanche":
        echo "$jour est un week-end.";
        break;

    default:
        echo "Jour inconnu.";
}
?>
