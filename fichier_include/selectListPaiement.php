<?php
    $sql = "SELECT * FROM paiement";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['ID_paiement']; ?></td>
    <td><?php echo $row['Nom']; ?></td>
    <td><?php echo $row['Date_paiement']; ?></td>
    <td><?php echo $row['Tranche1']; ?></td>
    <td><?php echo $row['Tranche2']; ?></td>
    <td><?php echo $row['Statut_paiement']; ?></td>
    <td>
        <a class="btn btn-success" type="add" href="enregistrerPaie.php"><i class="bi bi-plus"></i></a>
        <a class="btn btn-warning" type="edit" href="editPaie.php?ID_paiement=<?php echo $row['ID_paiement']; ?>"><i
                class="bi bi-pencil-square"></i></a>
        <a class="btn btn-danger" type="delete" href="deletePaie.php?ID_paiement=<?php echo $row['ID_paiement']; ?>"><i
                class="bi bi-trash"></i></a>
    </td>
</tr>
<?php  }
    }
?>