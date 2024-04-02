<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include('connexion.php'); // Vérification de la connexion
include('fichier_include/selectCaisse.php'); // Vérification de la connexion


// Exemple de récupération des valeurs de la base de données
$labels = ['Sanction Benef', 'Sanction Non Benef', 'Montants Payes', 'Frais Adhesion'];
$data = [
    $rowTontine['sommeSanctionBenef'],
    $rowTontine['sommeSanctionNonBenef'],
    $rowPaiement['sommeMontantsPayes'],
    $rowFraisAdhesion['sommeFraisAdhesion']
];
?>
<body>
<canvas id="statChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Récupération du canvas et création du contexte du graphique
const ctx = document.getElementById('statChart').getContext('2d');

// Création du diagramme à barres
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            label: 'Statistiques',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.6)', // Couleur des barres
            borderColor: 'rgba(75, 192, 192, 1)', // Couleur des bordures
            borderWidth: 1 // Largeur des bordures
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>
</html>