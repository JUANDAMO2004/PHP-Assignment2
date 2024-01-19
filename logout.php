<?php
 session_start();
 session_unset();
 session_destroy();
 header('location:SignIn.php'); //Closing the session and once it happen, it redirects to SignIn.php
?>