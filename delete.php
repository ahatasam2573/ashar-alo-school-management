<?php

    include "database.php";
    session_start();

    $s = "DELETE from class where CID={$_GET["id"]}";

    $db -> query($s);

    echo "<script>window.open('add_class.php?mess=Class Deleted.', '_self')</script>";

?>