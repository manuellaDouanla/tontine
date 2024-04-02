<?php
//insert.php;

if(isset($_POST["Nom"]))
{
include('connexion.php');
$ID = uniqid();
 for($count = 0; $count < count($_POST["Nom"]); $count++)
 {  
  $query = "INSERT INTO membre (cni, nom, prenom, telephone, quartier, DateInscription, FraisAdhesion)
  VALUES ('$cni', '$nom', '$prenom', '$telephone', '$quartier', '$DateInscription', $FraisAdhesion)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':ID'   => $ID,
    ':cni'  => $_POST["cni"][$count], 
    ':nom' => $_POST["nom"][$count], 
    ':prenom'  => $_POST["prenom"][$count],
    ':telephone'  => $_POST["telephone"][$count],
    ':quartier'  => $_POST["quartier"][$count],
    ':DateInscription'  => $_POST["DateInscription"][$count],
    ':FraisAdhesion'  => $_POST["FraisAdhesion"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>