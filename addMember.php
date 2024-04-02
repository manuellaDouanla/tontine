<?php
include 'connexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['save'])) {
    $cnis = $_POST['CNI'];
    $noms = $_POST['nom'];
    $prenoms = $_POST['prenom'];
    $quartiers = $_POST['quartier'];
    $telephones = $_POST['telephone'];
    $FraisAdhesions = $_POST['FraisAdhesion'];

    $stmt = $conn->prepare("INSERT INTO membre (CNI, Nom, Prenom, Telephone, Quartier, FraisAdhesion) VALUES (?, ?, ?, ?, ?, ?)");
    
    for ($i = 0; $i < count($cnis); $i++) {
        $cni = $cnis[$i];
        $nom = $noms[$i];
        $prenom = $prenoms[$i];
        $quartier = $quartiers[$i];
        $telephone = $telephones[$i];
        $FraisAdhesion = $FraisAdhesions[$i];

        $stmt->bind_param("sssssd", $cni, $nom, $prenom, $telephone, $quartier, $FraisAdhesion);
        $stmt->execute();
    }
    
    $stmt->close();
    $conn->close();

    // Rediriger l'utilisateur vers une autre page après l'insertion des données
    header('Location: listMember.php');
    exit();
}
?>