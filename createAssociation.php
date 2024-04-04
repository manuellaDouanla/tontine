<?php
include('connexion.php');

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Préparer la requête d'insertion des données dans la table "association"
$sqlInsert = "INSERT INTO Association (denomination, dateCreation, fraisInscription, plafondAssurance, sanctionBenef, sanctionNonBenef) VALUES (?, ?, ?, ?, ?, ?)";

// Préparer la déclaration
$stmt = $conn->prepare($sqlInsert);

// Lier les paramètres
$stmt->bind_param("ssssss", $denomination, $dateCreation, $fraisInscription, $plafondAssurance, $sanctionBenef, $sanctionNonBenef);

// Récupérer les données du formulaire
$denomination = $_POST["denomination"];
$dateCreation = $_POST["dateCreation"];
$fraisInscription = $_POST["fraisInscription"];
$plafondAssurance = $_POST["plafondAssurance"];
$sanctionBenef = $_POST["sanctionBenef"];
$sanctionNonBenef = $_POST["sanctionNonBenef"];

// Exécuter la requête préparée

if ($stmt->execute()) {
    echo "Nouvelle association enregistrée avec succès.";
    header("Location: index.php");
} else {
    echo "Erreur lors de l'enregistrement du membre : " . $stmt->error;
}

// Fermer la déclaration et la connexion
$stmt->close();

// Fermer la connexion à la base de données
$conn->close();
?>