<?php

if (isset($_GET["action"])) {
        if ($_GET["action"] == "SignIn") {
            include('inscription.php');
        }
       
    else if ($_GET["action"] == "connect") {
            include ('Connect.php');
    }
    
    else if ($_GET["action"] == "LogOut") {
            include ('logout.php');
    }
    
    else {
                include('container.php');
                }
    } 
else {
        include('container.php');
    }

?>