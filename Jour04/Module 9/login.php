<?php

$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je'; //Mot de passe haché 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $identifiant = $_POST['identifiant'] ?? '';
    $motdepasse = $_POST['motdepasse'] ?? '';

   // Verification des informations de connexion
    if ($identifiant === $identifiantEnregistre && password_verify($motdepasse, $motdepasseHash)) {
        echo "✅ Connexion réussie ! Bienvenue, $identifiant.";
    } else {
        echo "❌ Identifiant ou mot de passe incorrect.";
    }
} else {
    echo "Veuillez soumettre le formulaire de connexion.";
}
?>
