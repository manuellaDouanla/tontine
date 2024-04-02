<?php
// Connexion à la base de données (à adapter avec vos paramètres)
try {
    $pdo = new PDO('mysql:host=localhost;dbname=tontine', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer la valeur du plafond d'assurance depuis la table Association
    $stmt = $pdo->query("SELECT plafondAssurance FROM Association");
    $plafondAssurance = $stmt->fetchColumn();

    $stmtM = $pdo->query("SELECT Nom, Prenom FROM membre");
    $membres = $stmtM->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    // Valeur par défaut du plafond d'assurance en cas d'erreur
    $plafondAssurance = 0;
}
?>