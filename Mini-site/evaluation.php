<?php
$css = 'evaluation.css';
include('includes/header.php');
?>

  <main>
    <h2>Auto-évaluation par module</h2>

    <?php
      $evaluations = [
        "Module 1" => "10 - Assez simple pour comprendre les bases",
        "Module 2" => "9 - un peu plus complexe mais bon exercice pour débuter avec les variables",
        "Module 3" => "6 - Beaucoup d'opérateurs à maîtriser, mais essentiel pour les calculs",
        "Module 4" => "7 - un peu plus de mal à comprendre les conditions",
        "Module 5" => "6 - Les boucles sont très utiles, mais difficiles à maîtriser au début",
        "Module 6" => "7 - Les tableaux sont très pratiques, mais il faut bien comprendre la différence entre indexés et associatifs",
        "Module 7" => "8 - Les fonctions sont essentielles, mais il faut bien comprendre les paramètres et la portée des variables",
        "Module 8" => "5 - Les fonctions de chaîne de caractères sont utiles, mais un peu plus techniques",
        "Module 9" => "8.5 - Les superglobales sont très importantes pour la gestion des données dans les formulaires",
        "Module 10" => "8 - Les sessions sont cruciales pour la gestion des utilisateurs, mais un peu plus complexes à mettre en place",
      ];
    ?>

    <table>
      <thead>
        <tr>
          <th>Module</th>
          <th>Note sur 10 par Module</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($evaluations as $module => $note): ?>
          <tr>
            <td><?= $module ?></td>
            <td><?= $note ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <p class="note">1 = rien compris, 10 = maîtrisé</p>
  </main>

  <?php include('includes/footer.php'); ?>

