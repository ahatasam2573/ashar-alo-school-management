<?php

    include "database.php";
    session_start();

    $s = "DELETE from class where SID={$_GET["id"]}";

    $db -> query($s);

    echo "<script>window.open('add_class.php?mess=Subject Deleted.', '_self')</script>";

?>