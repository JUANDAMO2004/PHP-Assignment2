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


</head>
<body>
<?php 
//Global Header -->
require ('./includes/header.php');
require './includes/database.php';

//Selecting all data to display it in this part of the website
$sql = "SELECT id,name,lastname,username,picture FROM users_login"; 
$result = $conn->query($sql);

?>
<div class="sign-up-container">
  <div class="table-container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Username </th>
          <th scope="col"> Image </th>
          <th scope="col"> Edit </th>
          <th scope="col"> Delete </th>
        </tr>
      </thead>
      <tbody>
          <?php
          foreach ($result as $row) :?>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><a href='#' onclick='openModel("./uploads/<?php echo $row['picture']; ?>")'> <img src="images/view.png" height="50" width="50"> </a></td>
          <td><a href="update.php?id=<?php echo $row['id']; ?>&firstname=<?php echo $row['name']; ?>&lastname=<?php echo $row['lastname']; ?>&username=<?php echo $row['username']; ?>"> <img src="images/edit.png" height="50" width="50"> </a></td>
          <td><a href="delete.php?id=<?php echo $row['id']; ?>"> <img src="images/delete.png" height="50" width="50"></a></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>
<div id="imageModel" class="model">
  <span class="close" onclick="closeModel()">
        <img class="model-content" id="modelImage" style="width:50%;">
  <button> CLOSE </button>
  </span>
</div>
<script>
  function openModel(picture){
    document.getElementById("modelImage").src = picture;
    document.getElementById("imageModel").style.display = "block";
  }
  function closeModel(){
    document.getElementById("imageModel").style.display = "none";
  }
</script>
<?php
// Global Footer
require ('./includes/footer.php');?>
</body>
</html>