<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tontine";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Vérification si le formulaire est soumis
if (isset($_POST['save'])) {
    // Récupération des données du formulaire
    $noms = $_POST['selectMembre'];
    $datesPaiement = $_POST['Date_paiement'];
    $tranches1 = $_POST['Tranche1'];
    $tranches2 = $_POST['Tranche2'];
    $statutsPaiement = $_POST['Statut_paiement'];

    // Boucle sur les données pour effectuer l'insertion
    for ($i = 0; $i < count($noms); $i++) {
        $nom = $noms[$i];
        $datePaiement = $datesPaiement[$i];
        $tranche1 = $tranches1[$i];
        $tranche2 = $tranches2[$i];
        $statutPaiement = $statutsPaiement[$i];

        // Préparation de la requête d'insertion
        $sql = "INSERT INTO paiement (Nom, Date_paiement, Tranche1, Tranche2, Statut_paiement)
                VALUES ('$nom', '$datePaiement', '$tranche1', '$tranche2', '$statutPaiement')";

        // Exécution de la requête
        if (mysqli_query($conn, $sql)) {
            echo "Enregistrement effectué avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement : " . mysqli_error($conn);
        }
    }

    // Fermeture de la connexion
    mysqli_close($conn);
}
?>