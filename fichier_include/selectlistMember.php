<?php
    $sql = "SELECT * FROM membre";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['CNI']; ?></td>
    <td><?php echo $row['Nom']; ?></td>
    <td><?php echo $row['Prenom']; ?></td>
    <td><?php echo $row['Telephone']; ?></td>
    <td><?php echo $row['Quartier']; ?></td>
    <td><?php echo $row['created_date']; ?></td>
    <td><?php echo $row['FraisAdhesion']; ?></td>
    <td>
        <a class="btn btn-info" href="modifierMembre.php?modifier=<?php echo $row['ID'] ?>"><i
                class="bi bi-pencil-square"></i></a>
        <a href="deleteMember.php?delete=<?php echo $row['ID'] ?>" onclick="decrement()"><i class="btn btn-danger"><i
                    class="bi bi-trash"></i></i></a>
    </td>
</tr>
<?php  }
    }
?>