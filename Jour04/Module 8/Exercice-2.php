<?php

$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];

// Vérification du Nom
if (!isset($form['nom']) || trim($form['nom']) === '') {
    echo "Erreur : Le nom est requis.<br>";
} else {
    echo "Nom : valide<br>";
}

// Vérification de l'Âge
if (!isset($form['age']) || trim($form['age']) === '') {
    echo "Erreur : L'âge est requis.<br>";
} elseif (!is_numeric($form['age']) || $form['age'] <= 0) {
    echo "Erreur : L'âge doit être un nombre positif.<br>";
} else {
    echo "Âge : valide<br>";
}

// Vérification de l'Email
if (!isset($form['email']) || trim($form['email']) === '') {
    echo "Erreur : L'email est requis.<br>";
} else {
    echo "Email : valide<br>";
}
