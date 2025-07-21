<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $prenom = trim($_POST['prenom']);

    if ($prenom === '') {
        echo "Erreur : Le prénom est requis.";
    } else {
        echo "Bonjour " . htmlspecialchars($prenom) . " !";
    }

} else {
 echo "Veuillez envoyer le formulaire depuis <a href='formulaire.html'>formulaire.html</a>.";
}
