<?php

if (isset($_GET["action"])) {
        if ($_GET["action"] == "addcaddy") {
            include('addcaddy.php');
        }
    else if($_GET["action"]=="removeitem"){
        include('supprimercaddy.php');
    }
        
     else if($_GET["action"]=="facture"){
        include('generatePDF.php');
    }
      
    else {
                include('container.php');
                }
    }
else {
        include('container.php');
    }

?>