<?php

  include "database.php";
  session_start(); //it has to be use top of the page of php because it store value which can't access if it isn't in top

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
<body class="back">
  
    <img src="./img/cover.jpg" alt="Cover" width="800">
    <div class="login">
      <h1 class="heading">Admin Login</h1>
      <div class="log">
      <!-- //login admin user -->
      <?php
        if(isset($_POST["login"])){
          $sql = "SELECT * from admin where A_Name='{$_POST["a_name"]}' and A_Password ='{$_POST["a_password"]}'";
          $res = $db -> query($sql);
          if($res -> num_rows>0){
            $ro = $res -> fetch_assoc();
            $_SESSION["A_ID"] = $ro["A_ID"];  //storing admin id in session and matching it with $ro
            $_SESSION["A_Name"] = $ro["A_Name"];

            echo "<script>window.open('admin_home.php','_self');</script>";
          }else{
            echo "<div class='error'>Invalid Username and Password</div>";
          }
        }
      ?>


          <form action="" method="POST">
            <label>Username</label>
            <input type="text" name="a_name" required class="input"> <br>
            <label>Password</label>
            <input type="password" name="a_password" required class="input"> <br>
            <button type="submit" class="btn" name="login">Login</button>
          </form>
      </div>
    </div>
    <div class="footer">
      <footer>&copy; All Rights Reserved By Ahatasam Siam</footer>
    </div>
</body>
</html>