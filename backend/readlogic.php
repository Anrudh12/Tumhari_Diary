<?php
require 'connectlogic.php';
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login']==1){
		
        
	}
}

else{
header('Location:login.php');
}


$id = $_GET['id'];
$query = "SELECT title,entry from user_entries where id = '".$id."'; ";
$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if($num>0){
    $row = mysqli_fetch_assoc($result);
    $title =  $row['title'];
    $entry =  $row['entry'];
    
   
    
}





?>