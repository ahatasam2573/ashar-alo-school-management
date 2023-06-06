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
            <h3>Welcome <?php echo $_SESSION["A_Name"]; ?></h3> <br> <hr> <br>
            <h3>Add Subject Details</h3> <br> <br>

            <?php
            if(isset($_POST["submit"])){

                $sq = "INSERT into sub (SNAME) value('{$_POST["sname"]}')";
               if($db -> query($sq)){
                echo "<div class='success'>Insert Subject Successfully</div>";
               } else{
                    echo "<div class='error'>Insert failed</div>";
               }
               
            }
            ?>

             <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label>Subject Name</label>
                <input type="text" name="sname" required class="input">

                 <br> <br>

                <button class="btn" name="submit" type="submit">Add Subject</button>
                
            </form>          
        </div>
        <div class="tbox">
            <h3>Add Subject Details</h3>
            <?php
                //GETTING DELETED MESSAGE
                if(isset($_GET["mess"])){
                    echo "<div class='error'>{$_GET["mess"]}</div>";
                };
            ?>
            <table border="1px">
                <tr>
                    <th>S.No</th>
                    <th>Subject Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $s = "SELECT * from sub";
                    $res = $db -> query($s);

                    if($res -> num_rows>0){
                        $i = 0;
                        while($r = $res-> fetch_assoc()){
                            $i++; //it shows the list number on the ui
                            echo "<tr>
                                <td>{$i}</td>
                                <td>{$r["SNAME"]}</td>
                                <td><a href='sub_delete.php?id={$r["SID"]}' class='btnr'>Delete</a></td>
                                
                            </tr>";
                        };
                    };
                ?>
            </table>
        </div>
       
   </div>
    <div class="footer">
      <footer>&copy; All Rights Reserved By Ahatasam Siam</footer>
    </div>
</body>
</html>