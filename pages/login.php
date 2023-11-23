 <?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width ,initial-scale=1">
	
	<title>Login</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/login_stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="../js/jquery.js"></script>
</head>



<body class="container display_center">


	<div class="form-window col-md-6 mx-auto p-3">
		<img src="../images/logo.png" alt="" height="100px">
		<h3 id="head-login" class="mt-3">LOGIN</h3>	

		<form action="../backend/loginlogic.php" class="form_valid" method="POST" class="" autocomplete="off" >
		
		<div class="form-elements mb-5"><input type="email" name="email" placeholder="Email" id="email"></div>

		<div class="form-elements mb-5"><input type="Password" name="password" placeholder="Password" id="password"><span id="warning3"></span></div>

		<div class="form-elements mb-3"><input type="submit" value="Login" name="login_button" id="submit_btn"></div>
		<p class="sign_up_line" >Not registered?  <a href="../index.php">Create an account</a></p>
		</form>
	</div>


</body>

<?php
if (isset($_SESSION["login"])) {
 	    
if ($_SESSION["login"]==0) {
 ?>

<script type="text/javascript">
	alert('You entered a wrong email and password \n Please try again');
</script>

<?php 
session_destroy();
} } 
?>

</html>
