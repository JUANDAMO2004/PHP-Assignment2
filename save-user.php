<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Author" content="Juan David Montana"/>
  <meta name="Description" content="Assignment 2 | Security and File Management"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/wing.png" type="ICON"/>
  <title> Assignment 2 | Security and File Management </title>
  <!-- External CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Google Font 1 -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Google Font 2 -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <!-- Global Header -->
 <?php require ('./includes/header.php'); ?>
  <main>
    <?php

    include('./includes/database.php'); //Include my file database.php
    /* Retrieving the values using the method POST from the Index.php */
    $id = "";
    if(!empty($_POST['id'])){

      $id = $_POST['id'];
    }
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $filename = $_FILES['picture']['name'];
    $directory = './uploads/'.$filename;
    $tmp_name = $_FILES['picture']['tmp_name'];
    
    if($_FILES['picture']['size'] > 0) {
        move_uploaded_file($tmp_name, $directory);
    }
    
    /* Database Insertion if Everything is filled and accomplish the requirements*/
    if(empty($id)) {
        $password = hash('sha512', $password);/*Encripting the password. It will display an Encrypted password*/
        $stmt = $conn->prepare("INSERT INTO users_login(name,lastname,username, password,picture) VALUES('$name',' $lastname','$username','$password','$filename')");
        $stmt->execute();
 
        echo '<script> alert("Sucessfull registration")</script>';
        header("Location: SignIn.php"); // Redirecting to the signin.php once we regsitered succesfully
        
     }else {
      /*Update Query*/
      $pass = "";
      if(!empty($password)){
        $password = hash('sha512', $password);/*Encripting the new password. It will display an Encrypted password*/
        $pass = ",password = '$password'";
      }
        $stmt = $conn->prepare("UPDATE users_login set name = '$name',lastname = '$lastname',username = '$username',picture ='$filename' $pass where id = '$id'");
        $stmt->execute();
        
        echo '<script> alert("Profile Updated")</script>';
        header("Location: display-table.php"); // Redirecting to the display-table PHP once we regsitered succesfully
     }
    ?>
  </main>
</body>
</html>
<!-- Global Footer -->
<?php require ('./includes/footer.php'); ?>
