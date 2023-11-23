<?php 
include "../backend/readlistlogic.php";
  if(isset($_GET['del'])){

    ?>
    <script>
    alert('Entry delete successfully');  
    window.location.href ='read_list.php';
    </script>
<?php
  
  }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Read</title>
 	<link rel="stylesheet" type="text/css" href="../css/read_list_stylesheet.css">
 </head>
 <body>
 
<div class=" container">
  <ul class="list-group">
        <?php
        if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            
            
         ?>
  
           <li class="list-group-item  ">
                 <div class="row">
                    <div class="col-9"> <a class="read_list_link title_font" <?php echo "href='read.php?id={$row['id']}'" ?> ><?php  echo $count.". ".$row['title']; ?></a> </div>
                    <div class="col-3">
                        <button type= "button " onClick = " window.location.assign('<?php echo "../backend/deletelogic.php?id={$row['id']}"?>')"  class="btn_actions "><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                        <button type = "button" onClick = " window.location.assign('<?php echo "../backend/editlogic.php?id={$row['id']}"?>')" class="btn_actions "><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button></div>
                 </div>
                 <div class="row ">
                 <p class="time_stamp my-2 col-12"><?php echo $row['time']; ?></p>
                </div>
                 
           </li>
 

  <?php 
    $count++;
} }

  else{
  ?>
    <li class="list-group-item read_list_link  no_entries "><p class="title_font">No Entries yet</p></li>
  <?php }?>   
</ul>
</div>


 </body>
 </html>