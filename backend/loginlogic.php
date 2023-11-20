<?php

include("connectlogic.php");
if (isset($_POST["login_button"])) {

	$email = strip_tags(addslashes($_POST["email"]));
	$password = md5(strip_tags(addslashes($_POST["password"])));
	$status = 1;
	$check = "SELECT * FROM user_accounts WHERE (email,password,status) = ('$email','$password','$status');";

	mysqli_query($con,$check);
}


if ($con->affected_rows>0) {
	session_start();
	$query = "SELECT * FROM user_accounts where email = '".$email."';";
	$result = mysqli_query($con,$query);

	$row = mysqli_fetch_assoc($result);

	$_SESSION['name'] = $row['name'];
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['login']=1;
	header('Location:../pages/write.php');
 }

else {
	session_start();
	$_SESSION['login']=0;
	header('Location:../pages/login.php');

}

?>

