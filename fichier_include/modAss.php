<?php
$denomination = '';
$dateCreation = '';
$fraisInscription = '';
$plafondAssurance = '';
$sanctionBenef = '';
$sanctionNonBenef = '';

if  (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "SELECT * FROM Association WHERE ID=$ID";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $denomination = $row['denomination'];
    $dateCreation = $row['dateCreation'];
    $fraisInscription = $row['fraisInscription'];
    $plafondAssurance = $row['plafondAssurance'];
    $sanctionBenef = $row['sanctionBenef'];
    $sanctionNonBenef = $row['sanctionNonBenef'];
  }
}
?>