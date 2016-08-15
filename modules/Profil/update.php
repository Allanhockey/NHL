<?php 

 $users = new UserBD($db);
        $users->setAll($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"], $_POST["number"], $_POST["street"],$_POST["ville"],$_POST["CP"],$_POST["tel"]);
$users->updateUser($_SESSION["usercomplet"]["ID_user"]);

$usercomplet=array();
$usercomplet=$users->getUser($_SESSION["usercomplet"]["ID_user"]);
    
    $_SESSION["usercomplet"]=$usercomplet[0];
header('Location: index.php?module=Profil');
  exit();


?>