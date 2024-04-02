<?php
include('connexion.php'); // Vérification de la connexion

// Requête pour récupérer le nombre total de membres inscrits
$sqlMembres = "SELECT COUNT(*) AS totalMembres FROM membre";
$resultMembres = $conn->query($sqlMembres);

// Requête pour calculer la somme des colonnes "Tranche1" et "Tranche2" dans la table "paiement"
$sqlPaiement = "SELECT SUM(Tranche1 + Tranche2) AS totalPaiement FROM paiement";
$resultPaiement = $conn->query($sqlPaiement);

// Requête pour calculer la somme des colonnes "montant", "sanctionBenef" et "sanctionNonBenef" dans la table "tontine"
$sqlTontine = "SELECT SUM(montant + sanctionBenef + sanctionNonBenef) AS totalTontine FROM tontines";
$resultTontine = $conn->query($sqlTontine);

// Requête pour calculer la somme des sanctions bénéficiaires et non bénéficiaires dans la table "tontine"
$sqlSanctions = "SELECT SUM(sanctionBenef) AS sommeSanctionBenef, SUM(sanctionNonBenef) AS sommeSanctionNonBenef FROM tontines";
$resultSanctions = $conn->query($sqlSanctions);

// Requête pour calculer la somme des montants payés dans la table "paiement"
$sqlMontantsPayes = "SELECT SUM(Tranche1 + Tranche2) AS sommeMontantsPayes FROM paiement";
$resultMontantsPayes = $conn->query($sqlMontantsPayes);

// Requête pour calculer la somme des FraisAdhesion dans la table "membre"
$sqlFraisAdhesion = "SELECT SUM(FraisAdhesion) AS sommeFraisAdhesion FROM membre";
$resultFraisAdhesion = $conn->query($sqlFraisAdhesion);

// Vérification des résultats des requêtes
if (
  $resultMembres->num_rows > 0 &&
  $resultPaiement->num_rows > 0 &&
  $resultTontine->num_rows > 0 &&
  $resultSanctions->num_rows > 0 &&
  $resultMontantsPayes->num_rows > 0 &&
  $resultFraisAdhesion->num_rows > 0
) {
  // Récupération des résultats
  $rowMembres = $resultMembres->fetch_assoc();
  $rowPaiement = $resultPaiement->fetch_assoc();
  $rowTontine = $resultTontine->fetch_assoc();
  $rowSanctions = $resultSanctions->fetch_assoc();
  $rowMontantsPayes = $resultMontantsPayes->fetch_assoc();
  $rowFraisAdhesion = $resultFraisAdhesion->fetch_assoc();

  // Nombre total de membres inscrits
  $totalMembres = $rowMembres["totalMembres"];

  // Somme des paiements
  $sommePaiement = $rowPaiement["totalPaiement"];

  // Somme des montants, sanctions bénéficiaires et sanctions non bénéficiaires
  $sommeTontine = $rowTontine["totalTontine"];

  // Somme des sanctions bénéficiaires et non bénéficiaires
  $sommeSanctionBenef = $rowSanctions["sommeSanctionBenef"];
  $sommeSanctionNonBenef = $rowSanctions["sommeSanctionNonBenef"];

  // Somme des montants payés
  $sommeMontantsPayes = $rowMontantsPayes["sommeMontantsPayes"];

  // Somme des FraisAdhesion
  $sommeFraisAdhesion = $rowFraisAdhesion["sommeFraisAdhesion"];

  // Calcul de la somme des sanctions
  $sommeSaction = $sommeSanctionBenef + $sommeSanctionNonBenef;

    // Calcul de la somme totale
  $sommeTotale = $sommePaiement + $sommeTontine + $sommeFraisAdhesion + $sommeSanctionBenef + $sommeSanctionNonBenef;

  
  // Affichage des résultats
  // echo "Nombre total de membres inscrits : " . $totalMembres . "<br>";
  // echo "Somme des paiements : " . $sommePaiement . "<br>";
  // echo "Somme des montants, sanctions bénéficiaires et sanctions non bénéficiaires : " . $sommeTontine . "<br>";
  // echo "Somme des sanctions bénéficiaires : " . $sommeSanctionBenef . "<br>";
  // echo "Somme des sanctions non bénéficiaires : " . $sommeSanctionNonBenef . "<br>";
  // echo "Somme des montants payés : " . $sommeMontantsPayes . "<br>";
  // echo "Somme des FraisAdhesion : " . $sommeFraisAdhesion . "<br>";
  // echo "Somme totale : " . $sommeTotale . "<br>";
} else {
  echo "Aucun résultat trouvé.";
}
?>