<?php 
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login']==1){
		$full_name = (explode(" ",$_SESSION['name']));
		
		require 'header.php';
		
		if(isset($_GET['edit'])){
			$title = $_SESSION['title'];
			$entry = $_SESSION['entry'];
			$_SESSION['edit'] = 1;
			$_SESSION['id'] = $_GET['id'];
		}
	}
}

else{
header('Location:login.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Write</title>
	<link rel="stylesheet" type="text/css" href="../css/write_stylesheet.css">

</head>

<body>
	
	<div class="container">
		<form action="../backend/writelogic.php" class="diary_background col-12 p-4 mx-auto" autocomplete="off" method="POST" id="form_valid">
			<h4 class="user_message mb-4">Hey! <?php echo $full_name[0];?> . What's on your mind today?</h4>
			<input class=" form-control border-left-0 border-right-0 border-top-0  row-1 col-8 mb-4 " type="text" placeholder="Title" name="title" id = "title" value="<?php if(isset($_GET['edit'])){echo $title; }?>">
			 
			<textarea class="form-control  mb-4 " rows="16"  name="entry" ><?php if(isset($_GET['edit'])){echo $entry; } else{ echo "Dear Diary,";}?>
				
</textarea>
			<input type="hidden" name="user_id" value="">
			
			<input  type="submit" name="submit" value="Save">
			
			<?php if(isset($_SESSION['success_message'])){ ?>
			<span class="float-right message_success">*Saved successfully </span>
			
			<?php unset($_SESSION['success_message']); } ?>
			
		</form>

	</div>
</body>

</html>
