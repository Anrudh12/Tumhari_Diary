<?php

session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login']==1){
        require '../backend/connectlogic.php';
		$name = $_SESSION['name'];
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM user_entries where user_id = '".$user_id."';";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        $count = 1;
		require 'header.php';
        
	}
}

else{
header('Location:login.php');
}




?>