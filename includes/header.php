<?php
session_start();
if (!isset($_SESSION["id"])){
  header("location:SignIn.php");
  exit();
}
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <label> USERNAME: <?php  echo $_SESSION['username']?></label>
        </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Sign Up <span class="sr-only">  </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">View People </a>
          </li>
          <li>
            <a class="nav-link" href="logout.php"> Log out </a>
          </li>
        </ul>
      </div>
    </nav>
</header>