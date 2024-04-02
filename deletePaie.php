<?php
include('connexion.php');

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if (isset($_GET['ID_paiement'])) {
    $ID_paiement = $_GET['ID_paiement'];
    $sqlDelete = "DELETE FROM paiement WHERE ID_paiement='$ID_paiement'";

    if ($conn->query($sqlDelete) === TRUE) {
        echo "Suppression de l'association OK!";
        header("Location: listPaiement.php");
        exit();
    } else {
        die("Erreur lors de la suppression de l'association : " . $conn->error);
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>