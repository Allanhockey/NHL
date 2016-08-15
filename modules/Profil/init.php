<?php

if (isset($_GET["action"])) {
        if ($_GET["action"] == "update") {
            include('update.php');
        }
       
    
    
    else {
                include('container.php');
                }
    } 
else {
        include('container.php');
    }

?>