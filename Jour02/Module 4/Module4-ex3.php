<?php
$status = "expédiée"; 

$message = match($status) {
    "en cours"  => "Votre commande est en cours de traitement.",
    "expédiée"  => "Votre commande a été expédiée.",
    "livrée"    => "Votre commande a été livrée.",
    "annulée"   => "Votre commande a été annulée.",
    default     => "Statut inconnu."
};

echo $message;
?>
