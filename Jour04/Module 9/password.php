<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pwd = $_POST["pwd"] ?? '';
    $confirm = $_POST["confirm"] ?? '';

    if (strlen($pwd) < 6) {
        echo "<p style='color:red;'>Mot de passe trop court. (6 caractères minimum)</p>";
    } elseif ($pwd !== $confirm) {
        echo "<p style='color:red;'>Les deux mots de passe ne sont pas identiques.</p>";
    } else {
        $hashed = password_hash($pwd, PASSWORD_DEFAULT);
        echo "<h2>Mot de passe chiffré :</h2>";
        echo "<p><code>$hashed</code></p>";
    }
} else {
    echo "<p>Veuillez soumettre le formulaire.</p>";
}
?>
