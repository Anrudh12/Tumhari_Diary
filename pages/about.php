<?php 

session_start();
if(isset($_SESSION['login'])){
    require 'header.php';
}
else{
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about_stylesheet.css">
    <title>About</title>
</head>
<body class="container">
<div class="row my-5">
    <div class="col-lg-6 img_pic">
       
    </div>
    <div class=" col-lg-6  diary_background read_window p-3">
        <div class="title_font">
            About Tumhari Diary
        </div>
        <div class="entry_font">
            <p>
"Tumhari Diary" is an innovative online diary and journal platform that originated as an academic project. The platform provides individuals with a private space to record their introspective thoughts and cherished memories, allowing them to revisit these entries at their convenience. The inspiration for creating Tumhari Diary arose from the quest for an alternative to traditional pen-and-paper journaling, with a focus on maintaining the utmost privacy. The platform is completely free to use and prioritizes security, ensuring that users can express themselves freely.            </p>
        </div>
            
    </div>
</div>
<div class="row my-5">
    <div class=" col-lg-6 diary_background read_window p-3">
        <div class="title_font">
            About Creater
        </div>
        
        <div class="entry_font">
            <p>
                Hi folks! <br>
                My name is Anrudh Kumar. I am currently pursuing a master's degree in computer's applications from Jawaharlal Nehru University, New Delhi.
                A part from this i also like photography, playing guitar & chess. Feel free to reach me through my socials. I've also uploaded the code on github feel free to use it for educational purposes or academic projects.
            </p>

            <div class="socials mt-5">
                <span><a href="https://www.instagram.com/_rahul12_kumar_/"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></i></a></span>
                <span class="mx-5"><a href="https://linkedin.com/in/anrudh-kumar-3b9013210"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a></span>
                <span><a href="https://github.com/Anrudh12"><i class="fa-brands fa-github" style="color: #ffffff;"></i></a></span>
            </div>
        </div>
            
    </div>
    <div class="col-lg-6 img_pic_me">
       
    </div>
    
    
</div>


</body>
</html>