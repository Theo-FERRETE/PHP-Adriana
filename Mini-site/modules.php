<?php
$css = 'assets/css/modules.css';
include('includes/header.php');
?>

  <main>
    <h2>Liste des Modules PHP</h2>

    <?php
      $modules = [
        "Module 1 - Presentation de PHP et installation" => ["Syntaxe de base"],
        "Module 2 - Découvertes des Variables" => ["constantes"],
        "Module 3 - Découverte des opérateurs" => ["Opérateurs arithmétiques", "Opérateurs de comparaison", "Opérateurs logiques","Operateurs d'affectation", "Opérateurs d'incrémentation et de décrémentation", "Opérateurs de chaîne de caractères"],
        "Module 4 - Les structures de conditionnelles" => ["if, else, elseif", "switch", "opérateur ternaire"],
        "Module 5 - Les Boucles" => ["while", "do while", "for",],
        "Module 6 - Les Tableaux" => ["Tableaux indexés", "Tableaux associatifs", "foreach"],
        "Module 7 - Les Fonctions" => ["Définition et appel de fonction","Foctions avec paramètres","Valeur de retour","Portée de variables"],
        "Module 8 - Fonctions de chaine de caractères" => ["Fonctions sur les nombres","Fonction de débogage"],
        "Module 9 - Les Superglobales" => ["GET", "POST", "REQUEST", "SESSION", "COOKIE", "FILES", "FORMULAIRE"],
        "Module 10 - Les Sessions" => ["Comment démarrer une session", "Comment stocker des données dans une session", "Comment récupérer des données de session", "Comment détruire une session"],
      ];

      foreach ($modules as $titre => $contenu) {
        echo "<section>";
        echo "<h3>$titre</h3>";
        echo "<ul>";
        foreach ($contenu as $item) {
          echo "<li>$item</li>";
        }
        echo "</ul>";
        echo "</section>";
      }
    ?>
  </main>

  <?php include('includes/footer.php'); ?>

