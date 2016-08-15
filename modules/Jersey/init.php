<?php

if (isset($_GET["action"])) {
        if ($_GET["action"] == "detail") {
            include('detail.php');
        }
       
    else if ($_GET["action"] == "addpanier") {
            include ('addpanier.php');
    }else {
                include('container.php');
                }
    } else {
        include('container.php');
    }

?>