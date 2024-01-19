<?php
    include('./includes/database.php'); //Include my file database.php
    /* Retrieving the values using the method POST from the Index.php */
    /*require './includes/database.php';*/
    $id = $_GET['id'];

    /* Delete Query, once user clicks the button this profile will be deleted*/
    if(!empty($id)) {
        $stmt = $conn->prepare("DELETE FROM users_login where id ='$id'");
        $stmt->execute();
        
        echo '<script> alert("Registration Deleted ")</script>';
        header("Location: display-table.php"); // Redirecting to the Display-table.php
        
     }
?>