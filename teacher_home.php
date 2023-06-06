<?php

  include "database.php";
  session_start();

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
  <?php
      include "navbar.php";  //adding nav bar
    ?>
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
            <h3>Welcome <?php echo $_SESSION["TNAME"]; ?></h3> <br> 
                      
        </div>
       
   </div>
    <div class="footer">
      <footer>&copy; All Rights Reserved By Ahatasam Siam</footer>
    </div>
</body>
</html>