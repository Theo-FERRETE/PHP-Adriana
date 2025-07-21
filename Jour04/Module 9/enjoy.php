
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["interests"])) {
    $interests = $_POST["interests"];

    if (count($interests) >= 2) {
        echo "<h2>Vos centres d'intérêt sont :</h2>";
        echo "<ul>";
        foreach ($interests as $interest) {
            echo "<li>" . htmlspecialchars($interest) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color: red;'>Veuillez cocher au moins deux centres d'intérêt.</p>";
    }
} else {
    echo "<p style='color: red;'>Aucun centre d'intérêt sélectionné.</p>";
}
?>
