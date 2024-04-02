<?php
$Nom = '';
$Date_paiement = '';
$Tranche1 = '';
$Tranche2 = '';
$Statut_paiement = '';

if (isset($_GET['ID_paiement'])) {
    $ID_paiement = $_GET['ID_paiement'];
    $query = "SELECT * FROM paiement WHERE ID_paiement=$ID_paiement";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $Nom = $row['Nom'];
        $Date_paiement = $row['Date_paiement'];
        $Tranche1 = $row['Tranche1'];
        $Tranche2 = $row['Tranche2'];
        $Statut_paiement = $row['Statut_paiement'];
    }
}
?>
