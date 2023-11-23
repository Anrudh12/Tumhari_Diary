<?php 
require '../backend/readlogic.php';
require 'header.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Read</title>
 	<link rel="stylesheet" type="text/css" href="../css/read_stylesheet.css">
 </head>
 
 <body>
	
	<div class="container diary_background read_window p-3">
		<div class="title_font">
			"<?php echo "<pre>".$title.""; ?>" 
		</div>
		<div class="entry_font">
			<?php echo $entry; ?> 
		</div>
		
	</div>

	
 


 </body>
 </html>
