<?php
include('connexion.php');
$searchTerm = $_GET['term'];

$sql = "SELECT Nom, Prenom FROM membre WHERE Nom LIKE '%" . $searchTerm . "%' OR Prenom LIKE '%" . $searchTerm . "%'";
$runsql1 = mysqli_query($conn, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($runsql1)) {
    $data[] = array(
        'id' => $row['Nom'] . ' ' . $row['Prenom'],
        'text' => $row['Nom'] . ' ' . $row['Prenom']
    );
}

echo json_encode($data);
?>