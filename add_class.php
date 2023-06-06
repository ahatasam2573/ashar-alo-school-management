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
            <h3>Add Class Details</h3> <br> <br>

            <?php
            if(isset($_POST["submit"])){

                $sq = "INSERT into class (CNAME,CSEC) value('{$_POST["cname"]}' , '{$_POST["csec"]}')";
               if($db -> query($sq)){
                echo "<div class='success'>Insert Class Successfully</div>";
               } else{
                    echo "<div class='error'>Insert failed</div>";
               }
               
            }
            ?>

             <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label>Add Class Name</label>
                <select name="cname" required class="input2">
                    <option value="">Select</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                    <option value="X">X</option>
                </select> <br> <br>

                <label>Section</label>
                <select name="csec" required class="input2"> 
                    <option value="">Select</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select> <br> <br>

                <button class="btn" name="submit" type="submit">Add Class Details</button>
                
            </form>          
        </div>
        <div class="tbox">
            <h3>Class Details</h3>
            <?php
                //GETTING DELETED MESSAGE
                if(isset($_GET["mess"])){
                    echo "<div class='error'>{$_GET["mess"]}</div>";
                };
            ?>
            <table border="1px">
                <tr>
                    <th>S.No</th>
                    <th>Class Name</th>
                    <th>Section</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $s = "SELECT * from class";
                    $res = $db -> query($s);

                    if($res -> num_rows>0){
                        $i = 0;
                        while($r = $res-> fetch_assoc()){
                            $i++; //it shows the list number on the ui
                            echo "<tr>
                                <td>{$i}</td>
                                <td>{$r["CNAME"]}</td>
                                <td>{$r["CSEC"]}</td>
                                <td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</a></td>
                                
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