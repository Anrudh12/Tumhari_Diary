<?php

include("connectlogic.php");
if (isset($_POST["register_button"])) {

	$name = strip_tags(addslashes($_POST["name"]));
	$email = strip_tags(addslashes($_POST["email"]));
	$password = md5(strip_tags(addslashes($_POST["password"])));
	$timestamp = date("d-m-y h:m:s");
	$check = "SELECT * FROM user_accounts where email = '". $email."'; ";
	$status = 1;

	mysqli_query($con,$check);

}

if ($con->affected_rows>0) {
	session_start();
	$_SESSION['submit']=0;
	header('Location:../index.php');

 }

else {
	$query = "INSERT INTO user_accounts (name, email, password, time, status) VALUES ('$name','$email','$password','$timestamp','$status')";
	$result= mysqli_query($con,$query);
	
	session_start();
	$_SESSION['submit']=1;
	header('Location:../index.php');

}

?>

