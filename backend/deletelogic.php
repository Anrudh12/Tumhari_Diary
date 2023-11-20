<?php 
require 'connectlogic.php';
$id = $_GET['id'];

$query = "DELETE FROM user_entries where id = '".$id ."';";
$result = mysqli_query($con,$query);

if($con -> affected_rows>0){
    header('Location:../pages/read_list.php?del=1');
}

?>