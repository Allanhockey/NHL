<?php

$erreur = 0;
$inscription = false;
$erreurTab = array();
//$idchecked = array();
//On check si post est bien existant pour etre sur qu'on soit bien en etat de créer

    if ($_POST) {
    $usersToRegister = new UserBD($db);
    $idchecked=$usersToRegister->getCheckMail($_POST["email"]);
   // var_dump($idchecked);
    if ($idchecked) {
        $erreur++;
//        $erreurTab[$erreur] = "Ce login est déjà utilisé.";
     //   echo 'email est deja existant';
    }
    //echo "compteur erreur".$erreur;
    if ($erreur == 0) {
    //Si il y a pas d'erreur et que tout les champs sont rempli on les envoi a la bd avec la methode setAll qui est dans users.class.php et on met la variable $inscrpiton a true
        if (empty($_POST["nom"])) {
            if (empty($_POST["prenom"])) {
                if (empty($_POST["street"])) {
                    if (empty($_POST["password"])) {
                        if (empty($_POST["email"])) {
                            if (empty($_POST["number"])) {
                                if (empty($_POST["tel"])) {
                                    if (empty($_POST["ville"])) {
                                        if (empty($_POST["CP"])) {
                                                    $_POST["nom"] = "";
                                                    $_POST["prenom"] = "";
                                                    $_POST["street"] = "";
                                                    $_POST["password"] = "";
                                                    $_POST["email"] = "";
                                                    $_POST["number"] = "";
                                                   
                                                    $_POST["tel"]="";
                                                    $_POST["ville"]="";
                                                                }
                                                                }
                                                            }
                                                            }
                                                    }
                                                    }
                
                                                }
            
                                        }
                                    }
       
        $users = new UserBD($db);
        $users->setAll($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"], $_POST["number"], $_POST["street"],$_POST["ville"],$_POST["CP"],$_POST["tel"]);
                

        $users->createUser();
        $inscription = true;
    }
    }

?>
<?php
if($inscription){
     echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-success">' . "Sign In valided" . '</div></div></center>';
}

else{
    echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-danger">' . "Error" . '</div></div></center>';    }
?>