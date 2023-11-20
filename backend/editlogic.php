<?php 

require 'connectlogic.php';
session_start();
if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "SELECT title,entry  FROM user_entries where id = '".$id."';";

$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if($num>0){

     $row = mysqli_fetch_assoc($result);
     $_SESSION['title'] = $row['title']; 
     $_SESSION['entry'] = $row['entry'];
    
     header("Location:../pages/write.php?edit=1&id=".$_GET['id']);

}

else{
    echo "failed";
}

 


}


?>