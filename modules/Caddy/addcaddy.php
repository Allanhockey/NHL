<?php 


$size=$_POST['sizechoice'];
$qt=$_POST["quantity"];
$idprod=$_GET['idprod'];
$iduser=$_SESSION['usercomplet']["ID_user"];

$date = date("d-m-Y");
$caddy = new PanierBD($db);
$caddy->setAll($iduser,$idprod,$qt,$date,$size);    
$caddy->createPanier();

if(isset($_SESSION["nbcaddy"])){

$_SESSION["nbcaddy"]=$_SESSION["nbcaddy"]+$qt;}
else{
    $_SESSION["nbcaddy"]=$qt;
}
  


 echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-success">' . "Item added in your caddy" . '</div></div></center>';
?>