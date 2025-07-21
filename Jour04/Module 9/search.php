<?php

if (isset($_GET['search']) && trim($_GET['search']) !== '') {
    $texte = htmlspecialchars($_GET['search']); 
    echo "Vous avez recherché : <strong>$texte</strong>";
} 

else {
    echo "Aucune recherche saisie.";
}
