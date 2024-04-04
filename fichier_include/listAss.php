<?php
    $sql = "SELECT * FROM Association";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['denomination']; ?></td>
    <td><?php echo $row['dateCreation']; ?></td>
    <td><?php echo $row['fraisInscription']; ?></td>
    <td><?php echo $row['plafondAssurance']; ?></td>
    <td><?php echo $row['sanctionBenef']; ?></td>
    <td><?php echo $row['sanctionNonBenef']; ?></td>
    <td>
        <a class="btn btn-info" type="edit" href="modifAssociation.php?ID=<?php echo $row['ID']; ?>"><i
                class="bi bi-pencil-square"></i></a>
        <a class="btn btn-danger" type="delete" href="deleteAssociation.php?ID=<?php echo $row['ID']; ?>"><i
                class="bi bi-trash"></i></a>
    </td>
</tr>
<?php  }
    }
?>