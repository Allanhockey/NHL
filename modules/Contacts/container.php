<div class="row" id="container">
    <?php
    $Webmaster = "allan.harmegnies@gmail.com";
    $erreurCount = 0;
    $erreurText = "";
    $isSend = 0;
    $sendOk = 0;
    if (isset($_POST["send"])) {
        //S'il envoi sans mail on genere une erreur
        if (empty($_POST["email"])) {
            $erreurCount = $erreurCount + 1;
            $erreurText .= "- L'email est vide<br>";
        }
        //S'il envoi sans contenu pareil
        if (empty($_POST["contenu"])) {
            $erreurCount = $erreurCount + 1;
            $erreurText .= "- Le contenu est vide<br>";
        }
        //Si pas d'erreur on envoi . Objet = NBAStore EU, je recup mon mail entré en dur. contenu et email recuperer du formulaire. Date recupérée aussi pour la mettre dans le mail
        if ($erreurCount == 0) {
            $objet = '[NHL SHOP]';
            $headers = 'From:' . $_POST["email"] . "\r\n" . 'To:' . $Webmaster . "\r\n" . 'Subject:' . $objet . "\r\n" . 'Content-type:text/plain;charset=iso-8859-1' . "\r\n" . 'Sent:' . date('l, F d, Y H:i');
            $isSend = 1;
            (mail($Webmaster, $objet, $_POST["contenu"], $headers));

        }
    }
    ?>
    <div class="medium-12 column">
        <center><h3>Contact us !</h3></center>
        <?php
//message d'erreur
        if ($erreurCount > 0) {
            echo '
            <center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-danger">' . $erreurText . '</div></div></center>';
        }
//message d'envoi
        if ($isSend == 1) {
                echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-success"> Votre mail a bien été envoyé </div></div></center>';
            } 
        
        ?>
        <form method="post" action="index.php?module=Contacts" style="width:50%;margin:auto;padding-top:20px;">
            <div class="row">
                <div class="medium-12 column">
                    <input type="text" name="email" placeholder="Votre adresse email"  id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
                </div>
            </div>
            <div class="row">
                <div class="medium-12 column">
                    <textarea name="contenu" placeholder="Votre message" style="height: 200px;" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="medium-12 column">
                    <center>
                        <input class="btn btn-primary" type="submit" name="send" value="Envoyer" />
                        <input class="btn btn-primary" type="reset" value="Annuler" />
                    </center>
                </div>
            </div>
        </form>


    </div>
 

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> <div class="panel" style="height: 300px;margin-left:10px;padding-left:180px;padding-top:70px;">
                <!-- Information de contact -->
                <h4>Contacts</h4>
                <ul class="no-bullet">
                    <li><span class="fa fa-phone "></span> +32 (0) 496 18 96 55</li>
                    <li><span class="fa fa-location-arrow "></span> Rue Auguste Mouzin </li>
                    <li><span style="padding-right:19px;"></span>64 Wasmuel Belgium</li>
                    <li><span class="fa fa-mail-reply"></span><a href="mailto:allan.harmegnies@gmail.com"> allan.harmegnies@gmail.com</a></li>
                </ul>
            </div>
                </div>
                <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.9039618133697!2d3.8456260515096146!3d50.44288949568962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c259fbd65dc129%3A0x1015a9382a4f9f88!2sRue+Auguste+Mouzin%2C+7390+Quaregnon!5e0!3m2!1sfr!2sbe!4v1470248327928" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-3 col-md-offset-3"> 
                    <h1 class="text-center">WebMaster</h1> 
                </div>
            </div>
            <div class="row"> 
                    <div class="col-md-3 col-md-offset-3"> 
                    <center> <img src="images/profil.jpg" class="center-block img-circle img-responsive"> 
                    <h3 class="text-center">Allan Harmegnies</h3>
                    <p class="text-center">Developer</p></center></div>
                
            </div>
        </div>
    </div>
        
        