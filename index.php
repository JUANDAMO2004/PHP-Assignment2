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
  <main>
    <section>
      <!--SIGN UP form structure using HTML and basic functions of JS-->
      <div class="sign-up-container">
        <div class="sign-up-form">
            <form method="POST" name="sign_in" onsubmit="return validate()" action="save-user.php" enctype='multipart/form-data'> 
                  <h1> <strong> SIGN UP </strong></h1>
                  <label> First Name <span> * </span></label>
                  <input type="text" name="firstname" placeholder="First Name" id= "name">
                  <label> Last Name <span> * </span></label>
                  <input type="text" name="lastname" placeholder="Last Name" id="lastname" >
                  <label> Username <span> * </span></label>
                  <input type="text" name="username" placeholder="Username" id="username" >
                  <label> Password <span> * </span></label>
                  <input type="password" name="password" placeholder="Password" id="password">
                  <label> Confirm Password <span> * </span></label>
                  <input type="password" name="confirm" placeholder="Confirm Password" id="confirm">
                  <label> Upload Picture <span> * </span></label>
                  <input type="file" name="picture" id="picture" accept="image/*" />
                  <button type="submit" name ="sign-up" value="SIGN UP" id="button1"> SIGN UP</button> 
                  <a href="SignIn.php"> Already an Account? Sign In ! </a>
            </form>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
  <script>
     /*Validations if the field is empty as well as if the password does match with its respective confirmation*/
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
		if (password.length == 0 || password != confirm) {
			alert("Your password does not match ");
      return false;
		}
    }
  </script>
 <!-- Global Footer -->
 <?php require ('./includes/footer.php'); ?>
