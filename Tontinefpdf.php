<?php
    // Inclure la bibliothèque FPDF
    require('assets/fpdf186/fpdf.php');

    // Connexion à la base de données (remplacez les valeurs par celles de votre configuration)
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "tontine";

    $conn = new mysqli($host, $user, $pass, $db);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Requête SQL pour récupérer les données
    $sql = "SELECT code, Nom, montant, ordrebenef, sanctionBenef, sanctionNonBenef, created_date FROM tontines";
    $result = $conn->query($sql);
   
    // Calcul de la somme totale des montants
    $sum = "SELECT SUM(montant) AS total_amount FROM tontines";
    $restatsum = $conn->query($sum);
    $row = $restatsum->fetch_assoc();
    $totalAmount = $row["total_amount"];

    $sqlc = "SELECT code FROM tontines";
    $codeResult = $conn->query($sqlc);
    $codeRow = $codeResult->fetch_assoc();
    $code = $codeRow['code'];

    // Création d'un objet FPDF
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage('P', 'A4');
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'LISTE DES TONTINES', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'CODE: '.$code, 0);
    $pdf->Ln(15);

    // Définition des en-têtes de colonnes
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(25, 10, 'Ordre B', 1);
    $pdf->Cell(50, 10, 'Nom', 1);
    $pdf->Cell(30, 10, 'Montant', 1);
    $pdf->Cell(25, 10, 'SanctionB', 1);
    $pdf->Cell(27, 10, 'SanctionNB', 1);
    $pdf->Cell(40, 10, 'Total', 1);
    $pdf->Ln();

    // Parcours des lignes de résultats
    $sumtotal = 0;
    while ($row = $result->fetch_assoc()) {
        $ordre = $row['ordrebenef'];
        $nom = $row['Nom'];
        $montant = $row['montant'];
        $sanctionBenef = $row['sanctionBenef'];
        $sanctionNonBenef = $row['sanctionNonBenef'];
       
        
        $montantAjuste =0;
        if ($sanctionNonBenef) {
            $montantAjuste = $montant - $sanctionNonBenef;
        } elseif ($sanctionBenef) {
            $montantAjuste = $montant - $sanctionBenef;
        } else {
            $montantAjuste = $montant;
        }

        $sumtotal += $montantAjuste;
       
        //$sumtotal = $montant + $sanctionBenef + $sanctionNonBenef;

        // Affichage des données dans le tableau
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(25, 10, $ordre, 1);
        $pdf->Cell(50, 10, $nom, 1);
        $pdf->Cell(30, 10, $montant, 1);
        $pdf->Cell(25, 10, $sanctionBenef, 1);
        $pdf->Cell(27, 10, $sanctionNonBenef, 1);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, $montantAjuste, 1);
        $pdf->Ln();

    }
    // Affichage du montant total
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(157, 10, 'Montant total', 1);
    $pdf->Cell(40, 10, $sumtotal, 1);
    $pdf->Ln();
 


    // Affichage du fichier PDF
    $pdf->Output();

    // Fermeture de la connexion à la base de données
    $conn->close();
    ?>