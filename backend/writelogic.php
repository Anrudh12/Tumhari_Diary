<?php 
include("connectlogic.php");
session_start();
if (isset($_POST["submit"])) {
    $user_id = $_SESSION['user_id'];
	$title = $_POST['title'];
	if(empty($title)){
		$title = "Untitled.....";
	}
	$entry = $_POST['entry'];
	$timestamp = date("d-m-y h:m:s");
	
	if(isset($_SESSION['edit'])){
		$id = $_SESSION['id'];
		$query = "UPDATE user_entries SET title = '$title',entry='$entry',time='$timestamp' WHERE id = '".$id."' ";
	}
    
	else{
		$query = "INSERT INTO user_entries ( user_id, title, entry, time) VALUES ('$user_id','$title','$entry','$timestamp')";
	}


	mysqli_query($con,$query);

}

if ($con->affected_rows>0) {
	$_SESSION['success_message'] = 1;
	header('Location:../pages/write.php');

 }

else {

		echo("failed");


}

?>
