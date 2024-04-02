<?php
// Connexion à la base de données
include('connexion.php');

// Récupérez l'ID du membre à partir de la requête AJAX
$memberID = $_POST['memberID'];

// Effectuez une requête dans la base de données pour récupérer les informations du membre
// Remplacez cette partie avec votre propre logique de récupération des informations du membre

// Exemple de récupération des informations du membre à partir de la table "membre"
$query = "SELECT * FROM membre WHERE ID = $memberID";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $memberInfo = mysqli_fetch_assoc($result);

    // Renvoyer les informations du membre au format JSON
    echo json_encode($memberInfo);
} else {
    // Renvoyer une réponse vide ou un message d'erreur approprié
    echo json_encode(null);
}
// Fermer la connexion à la base de données
$conn->close();
?>