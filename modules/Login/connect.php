<?php  
$usertoconnect = new UserBD($db);
$user=array();    
$user=$usertoconnect->verifConnect($_POST["email"],$_POST["password"]);

//SECURISATION MD5
//$user=$usertoconnect->verifConnect($_POST["email"],md5($_POST["password"]));


if($user!=null){
   
   
    $_SESSION["usercomplet"]=$user[0];
    $panier=new PanierBD($db);
    $paniercompte=array();
    $paniercompte=$panier->getPanier($_SESSION["usercomplet"]["ID_user"]);
    $_SESSION["nbcaddy"]=sizeof($paniercompte);
    header('Location: http://localhost/nhl_shop/index.php');
    exit();


}
else 
{
    header('Location: http://localhost/nhl_shop/index.php?module=Login&error=1');
    exit();

}
    
?>