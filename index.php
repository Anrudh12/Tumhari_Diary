<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width ,initial-scale=1">
	<title>sign up</title>
   
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/signup_stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/jquery.js"></script>
</head>



<body class="container display_center">

	<div class="form-window col-md-6 mx-auto p-3">
		<img src="images/logo.png" alt="" height="100px">
		<h3 id="head-register" class="mt-3">REGISTER</h3>

		<form action="backend/registerlogic.php" class="form_valid" method="POST"  autocomplete="off" >
		<div class="form-elements mb-5"><input type="text" name="name" placeholder="Full Name" id="name"><span id="warning1"></span></div>
		
		<div class="form-elements mb-5"><input type="email" name="email" placeholder="Email" id="email"><span id="warning2"></span></div>

		<div class="form-elements mb-5"><input type="Password"  minlength="8" maxlength="25" name="password" placeholder="Password" id="password"><span id="warning3"></span></div>

		<div class="form-elements mb-5"><input type="Password" name="confirm_password" placeholder="Confirm Password" id="confirm_password"><span id="warning4"></span></div>

		<div class="form-elements mb-3"><input type="submit" value="Register" name="register_button" id="submit_btn"></div>
		<p class="sign_in_line" >Already have an account?  <a href="pages/login.php">Sign in</a></p>
		</form>
	</div>


</body>


<!-- email exist or not block -->

<?php
if (isset($_SESSION["submit"])) {
 
if ($_SESSION["submit"]==1) {
 ?>

<script type="text/javascript">
	alert('Registered Successfully');
	window.location.href ='pages/login.php';
	
</script>

<?php session_destroy();

} ?>


<?php 
if ($_SESSION["submit"]==0) {
 ?>

<script type="text/javascript">
	alert('Email already exists');
</script>

<?php 
session_destroy();
} } 
?>

</html>	
