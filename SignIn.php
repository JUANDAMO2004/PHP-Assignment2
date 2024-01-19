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
    <main> <!--SIGN IN form-->
      <div class="sign-in-container">
        <div class="sign-in-form">
          <form method="POST" action="./includes/validate.php">
            <h1> <strong> SIGN IN </strong></h1>
              <label> Username <span> * </span></label>
              <input required type="text" name="username" placeholder="Username" autocomplete="off">
              <label> Password <span> * </span></label>
              <input required type="password" name="password" placeholder="Password">
              <button type="submit" name="sign-in" value="SIGN IN" id="button2"> SIGN IN </button>
              <a href="index.php"> Doesn't have an account? Sign Up ! </a>
          </form>
        </div>
      </div>
    </main>
</body>
</html>

<!-- Global Footer -->
<?php require ('./includes/footer.php'); ?>