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
<!-- Global Header -->
<?php require ('./includes/header.php');?>
<div class="edit-container">
  <div class="edit-form">
        <form method="POST" name="sign_in" onsubmit="return validate()" action="save-user.php" enctype='multipart/form-data'> 
        <h1> <strong> UPDATE </strong></h1>
        <label hidden> ID: <span style="color: red;"> * </span></label>
        <input hidden type="text" name="id" id= "id" value="<?php echo $_GET['id']; ?>">
        <label> First Name <span> * </span></label>
        <input type="text" name="firstname" value="<?php echo $_GET['firstname']; ?>">
        <label> Last Name <span> * </span></label>
        <input type="text" name="lastname" placeholder="Last Name" id="lastname" value="<?php echo $_GET['lastname']; ?>">"
        <label> Username <span> * </span></label>
        <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $_GET['username']; ?>">"
        <label> Password <span> * </span></label>
        <input type="password" name="password" placeholder="Password" id="password">
        <label> Confirm Password <span> * </span></label>
        <input type="password" name="confirm" placeholder="Confirm Password" id="confirm">
        <label> Upload Picture <span> * </span></label>
        <input type="file" name="picture" id="picture" accept="image/*" />
        <button type="submit" name ="sign-up" value="EDIT" id="button1"> EDIT </button>
  </div>
</div>
</form>
<!-- Global Footer -->
<?php require ('./includes/footer.php');?>
</body>
</html>
<script> /*Calling the validations if the field is emptys*/
    function validate(){
      var name = document.forms["sign_in"]["firstname"].value;
      var lastname = document.forms["sign_in"]["lastname"].value;
      var username = document.forms["sign_in"]["username"].value;
      var password = document.forms["sign_in"]["password"].value;
      var confirm = document.forms["sign_in"]["confirm"].value;
      console.log("Here " + name);
      
      
    if (name.length == 0) {
        alert("Please enter a name");
        return false;
		}
		if (lastname.length == 0) {
			 alert("Please enter a Last Name");
       return false;
		}
		if (username.length == 0) {
			 alert("Please enter a Username");
       return false;
		}
		if ( password != confirm) {
			alert("Your password does not match ");
      return false;
		}
    }
  </script>