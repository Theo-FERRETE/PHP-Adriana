<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['user']['username'];
$role = $_SESSION['user']['role'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashbord</title>
</head>

<body>
    <h1>Bienvenue <?= htmlspecialchars($username) ?>, vous avez le rôle <?= htmlspecialchars($role) ?>.</h1>
    <form method="POST" action="logout.php">
        <button type="submit">Déconnexion</button>
    </form>
</body>
</html>