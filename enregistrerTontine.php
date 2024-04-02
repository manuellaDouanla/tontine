<?php
include 'connexion.php';
if (isset($_POST['save'])) {
    $codes = $_POST['code'];
    $noms = $_POST['nom'];
    $montants = $_POST['montant'];
    $ordres = $_POST['ordre'];
    $sanctionsB = $_POST['sanctionB'];
    $sanctionsNB = $_POST['sanctionNB'];
    $stmt = $conn->prepare("INSERT INTO tontines (code, Nom, montant, ordrebenef, sanctionBenef, sanctionNonBenef) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiis", $code, $nom, $montant, $ordre, $sanctionB, $sanctionNB);
   
    for ($i = 0; $i < count($codes); $i++) {
        $code = $codes[$i];
        $nom = $noms[$i];
        $montant = $montants[$i];
        $ordre = $ordres[$i];
        $sanctionB = $sanctionsB[$i];
        $sanctionNB = $sanctionsNB[$i];
    
        //$stmt->bind_param("ssdiis", $code, $nom, $montant, $ordre, $sanctionB, $sanctionNB);
        $stmt->execute();
    }
    $stmt->close();
    $conn->close();

    // Return a response
   // alert ('insertion good');
    echo json_encode($response);

}
?>