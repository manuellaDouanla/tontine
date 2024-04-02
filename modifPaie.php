<?php
// Récupérer les valeurs des champs du formulaire
$ID_paiement = $_POST['ID_paiement'];
$Nom = $_POST['Nom'];
$Date_paiement = $_POST['Date_paiement'];
$Tranche1 = $_POST['Tranche1'];
$Tranche2 = $_POST['Tranche2'];
$Statut_paiement = $_POST['Statut_paiement'];

// Connexion à la base de données (vous devez utiliser vos propres informations de connexion)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tontine";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Préparer et exécuter la requête de mise à jour
$sql = "UPDATE paiement SET Nom='$Nom', Date_paiement='$Date_paiement', Tranche1='$Tranche1', Tranche2='$Tranche2', Statut_paiement='$Statut_paiement' WHERE ID_paiement='$ID_paiement'";

if ($conn->query($sql) === TRUE) {
    echo "Mise à jour des données réussie.";
  header("Location: listPaiement.php");

} else {
    echo "Erreur lors de la mise à jour des données : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>