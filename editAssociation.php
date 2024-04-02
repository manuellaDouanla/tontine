<?php
/* Inclure le fichier */
require_once "connexion.php";

if (isset($_POST['update'])) {
  $ID = $_GET['ID'];

  $denomination = $_POST['denomination'];
  $dateCreation = $_POST['dateCreation'];
  $fraisInscription = $_POST['fraisInscription'];
  $plafondAssurance = $_POST['plafondAssurance'];
  $sanctionBenef = $_POST['sanctionBenef'];
  $sanctionNonBenef = $_POST['sanctionNonBenef'];

  $query = "UPDATE Association set denomination = '$denomination', dateCreation = '$dateCreation', fraisInscription = '$fraisInscription', plafondAssurance = '$plafondAssurance', sanctionBenef = '$sanctionBenef', sanctionNonBenef = '$sanctionNonBenef' WHERE ID=$ID";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: listAssociation.php');
}
?>