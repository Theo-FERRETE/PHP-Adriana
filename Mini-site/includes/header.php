<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil - PHP</title>
  <link rel="stylesheet" href="assets/css/commun.css">

 <?php if (!empty($css)) : ?>
  <link rel="stylesheet" href="assets/css/<?= htmlspecialchars($css) ?>">
<?php endif; ?>


</head>

<header>
  <h1>Bienvenue sur le Mini-Site de PHP</h1>
</header>

<nav>
  <a href="index.php">Accueil</a>
  <a href="modules.php">Modules</a>
  <a href="evaluation.php">Évaluation</a>
</nav>
