<?php
//store the user inputs in variables and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

//connect to db
require 'database.php';

//set up and run the query
$sql = "SELECT id, Username FROM users_login 
WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
//store the number of results in a variable
$count = $result -> rowCount(); //Counting rows
//check if any matches found
print_r ($result);
//die("Llega " . $count);
if ($count > 0){
	//echo 'Logged in Successfully.';
	$row = $result->fetch();
	// foreach  ($result as $row){
		//access the existing session created automatically by the server
		session_start();
		//take the user's id from the database and store it in a session variable
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $username;
		//redirect the user
		Header('Location: ../display-table.php');
	// }
}
else {
	echo 'Invalid Login';
}
$conn = null;
?>