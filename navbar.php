<div class="navbar">
    <ul class="list">
        <b style="color:white; float:left; line-height: 50px; margin-left: 10px;">Ashar Alo School Management</b>

        <?php
            if(isset($_SESSION["A_ID"])){
                echo '
                
                <li ><a href="admin_home.php">Admin Home</a></li>
                <li ><a href="change_pass.php">Settings</a></li>
                <li ><a href="logout.php">Logout</a></li>

                     
            ';
            }else{
                echo '
                
                <li ><a href="index.php">Admin</a></li>
                <li ><a href="teacher_login.php">Teacher</a></li>
                <li ><a href="contact.php">Contact US</a></li>

                     
            ';
            }
        ?>
    </ul>
</div>