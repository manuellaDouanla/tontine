<?php
    // Requête SQL pour calculer la somme des sanctions bénéficiaires et non bénéficiaires dans la table "tontine"
    $sqlTontine = 'SELECT SUM(sanctionBenef) AS sommeSanctionBenef, SUM(sanctionNonBenef) AS sommeSanctionNonBenef FROM tontines';
    $resultTontine = $conn->query($sqlTontine);

    // Requête SQL pour calculer la somme des montants payés dans la table "paiement"
    $sqlPaiement = 'SELECT SUM(Tranche1 + Tranche2) AS sommeMontantsPayes, MAX(Date_paiement) AS DatePaiement FROM paiement';
    $resultPaiement = $conn->query($sqlPaiement);

    // Requête SQL pour calculer la somme des FraisAdhesion dans la table "membre"
    $sqlFraisAdhesion = 'SELECT SUM(FraisAdhesion) AS sommeFraisAdhesion FROM membre';
    $resultFraisAdhesion = $conn->query($sqlFraisAdhesion);

    // Vérification des résultats des requêtes
    if ($resultTontine->num_rows > 0 && $resultPaiement->num_rows > 0 && $resultFraisAdhesion->num_rows > 0) {
        // Récupération des résultats
        $rowTontine = $resultTontine->fetch_assoc();
        $rowPaiement = $resultPaiement->fetch_assoc();
        $rowFraisAdhesion = $resultFraisAdhesion->fetch_assoc();
                            
        // Somme des FraisAdhesion
        $sommeFraisAdhesion = $rowFraisAdhesion['sommeFraisAdhesion'];

        // Calcul de la somme totale
        $sommeTotale = $rowTontine['sommeSanctionBenef'] + $rowTontine['sommeSanctionNonBenef'] + $rowPaiement['sommeMontantsPayes'] + $rowFraisAdhesion['sommeFraisAdhesion']; 
?>
<tr>
    <td><?php echo $rowPaiement['DatePaiement']; ?></td>
    <td><?php echo $rowTontine['sommeSanctionBenef']; ?></td>
    <td><?php echo $rowTontine['sommeSanctionNonBenef']; ?></td>
    <td><?php echo $rowPaiement['sommeMontantsPayes']; ?></td>
    <td><?php echo $rowFraisAdhesion['sommeFraisAdhesion']; ?></td>
    <td><?php echo $sommeTotale; ?></td>
</tr>
<?php 
    } else {
        echo 'Aucun résultat trouvé.';
    }
?>