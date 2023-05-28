<?php

  include "database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ashar Alo Shool</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  
    <div class="home-bannerImg">
        <img src="./img/cover1.jpg" alt="Home-Cover">
    </div>

   <div id="section">
        <div class="main-desc">
            <?php
                include "sidebar.php"
            ?>
        </div>
        <div id="content">
            <h3>Welcome to Admin Home Page</h3> <br>
            <h3>School Information</h3><br>
           <hr>
            <div class="pic-desc">
                <img src="./img/student.jpg" alt="student" width="200px" class="student-pic">
                <p class="desc">Ashar Alo is a school where poor students study free. It's management system is designed to automate this school's diverse operation from classes, exams to schools event. It's a powerful system for manage students, their classes, subjects, teachers and many more like exams,routine.</p>
            </div>            
        </div>
       
   </div>
    <div class="footer">
      <footer>&copy; All Rights Reserver By Ahatasam Siam</footer>
    </div>
</body>
</html>