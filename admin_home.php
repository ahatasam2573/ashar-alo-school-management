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
<body class="back">
  
    <img src="./img/cover.jpg" alt="Cover" width="800">
    <div class="login">
      <h1 class="heading">Admin Login</h1>
      <div class="log">
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
      <footer>&copy; All Rights Reserver By Ahatasam Siam</footer>
    </div>
</body>
</html>