<?php
    include("connexion.php");
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET['delete'])) {
    $sql = "DELETE FROM membre WHERE ID =".$_GET['delete'];
    $req = mysqli_query($conn, $sql);
    if ($req) {
        echo "deleted";
        header("location: listMember.php");
    }else{
        echo "not deleted".mysqli_stmt_errno($conn,$req);
    }
 }

 if (isset($_GET['deletes'])) {
    $sql = "DELETE FROM tontines WHERE id_tontine =".$_GET['deletes'];
    $req = mysqli_query($conn, $sql);
    if ($req) {
        echo "deleted";
        header("location: listTontine.php");
    }else{
        echo "not deleted".mysqli_stmt_errno($conn,$req);
    }
    mysqli_close($conn);
 }

?>