<?php

    error_reporting(0);

    if($_GET['page']==""){
        include 'profile.php';
    } else if($_GET['page']=="visimisi"){
        include 'visimisi.php';
    }

?>