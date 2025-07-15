<?php
$role = 'admin';

if ($role === 'admin') {
    echo "Accés complet autorisé.";
} 

elseif ($role === 'editeur') {
    echo "Accès limité aux modifications.";
}

elseif ($role === 'visiteur') {
    echo "Accès en lecture seule.";
}

else {
    echo "Rôle inconnu";
}
?>

<?php
$role = "éditeur"; 

switch ($role) {
    case "admin":
        echo "Accès complet autorisé";
        break;
    case "éditeur":
        echo "Accès limité aux modifications";
        break;
    case "visiteur":
        echo "Accès lecture seule";
        break;
    default:
        echo "Rôle inconnu";
}
?>
