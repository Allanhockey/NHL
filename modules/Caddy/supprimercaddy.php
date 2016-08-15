<?php 


$caddy = new PanierBD($db);

$caddy->deleteitemPanier($_GET["idpan"]);

if(isset($_SESSION["nbcaddy"])){
        if($_SESSION["nbcaddy"]>0){
            $_SESSION["nbcaddy"]=$_SESSION["nbcaddy"]-intval($_GET["qt"]);}

            else{
                $_SESSION["nbcaddy"]=0;
                }
}
  

  header('Location: index.php?module=Caddy');
  exit();

 
?>