<div class="section"> 
    <div class="container">
        <div class="row"> 
            <div class="col-md-6"> 
                <h1>Sign In</h1> 
                <p></p>
                <form action="index.php?module=Login&action=SignIn" method="post"  name="Inscription-form"  onsubmit="return check();">
                    
                     <div class="small-3 columns">
                               <label for="email-label" class="right inline" id="emailtitre"><b>E-mail</b></label>
                    </div>
                            <div class="small-9 columns">
                                <input class="inscriptionProgressRequis" type="text" id="email-label" name="email" placeholder="Your mail" >
                                 <span id="erreuremail" style="color:red;"></span>
                            </div>
                      <div class="small-3 columns">
                                <label for="password-label" class="right inline"><b>Password</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="password" id="password-label" name="password" placeholder="Your password">
                                <span id="erreurpassword" style="color:red;"></span>
                            </div>
                
                     <div class="small-3 columns">
                                <label for="name-label" class="right inline"><b>Name</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="nom-label" name="nom" placeholder="Your Name">
                                <span id="erreurnom" style="color:red;"></span>
                            </div>
                    <div class="small-3 columns">
                                <label for="prenom-label" class="right inline"><b>First name</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="prenom-label" name="prenom" placeholder="Your First Name">
                                <span id="erreurprenom" style="color:red;"></span>
                            </div> 
                  
                    <div class="small-3 columns">
                                <label for="street-label" class="right inline"><b>Street</b></label>
                                                          </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="street-label" name="street" placeholder="Your Street">
                                <span id="erreurstreet" style="color:red;"></span>
                            </div>
                    
                    <div class="small-3 columns">
                        <label for="num-label" class="right inline"><b>Number</b></label>
                            </div>
                            <div class="small-9 columns">
                                <input class="inscriptionProgressRequis" type="text" id="number-label" name="number" placeholder="Your number">
                                <span id="erreurnumber" style="color:red;"></span>
                            </div>
                   
                    <div class="small-3 columns">
                            <label for="CP-label" class="right inline"><b>Postal code</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="cp-label" name="CP" placeholder="Your postal code">
                                <span id="erreurcp" style="color:red;"></span>
                            </div> 
                    
                    <div class="small-3 columns">
                            <label for="Ville-label" class="right inline"><b>City</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="Ville-label" name="ville" placeholder="Your City">
                                <span id="erreurville" style="color:red;"></span>
                            </div> 
                    <div class="small-3 columns">
                            <label for="Tel-label" class="right inline"><b>Phone</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="tel-label" name="tel" placeholder="Your Phone Number">
                                <span id="erreurtel" style="color:red;"></span>
                            </div>
                    <p></p>
                    
                   <div><input type="submit" class="btn btn-primary btn-lg"  id='buttoninscription' value='Sign In'></div>
                      <script type="text/javascript" >function check(){
                              
                              var email=document.getElementById('email-label').value;
                              var mdp=document.getElementById('password-label').value;
                              var nom=document.getElementById('nom-label').value;
                              var prenom=document.getElementById('prenom-label').value;
                              var street=document.getElementById('street-label').value;
                              var number=document.getElementById('number-label').value;
                              var cp=document.getElementById('cp-label').value;
                              var ville=document.getElementById('Ville-label').value;
                              var tel=document.getElementById('tel-label').value;
                              
                            
                              
                           if(email == ""){                             
                                 document.getElementById('erreuremail').innerHTML = '*champs obligatoire';
                               return false;
                           }
                              else{
                                  document.getElementById('erreuremail').innerHTML = '';
                                  
                              }
                          
                            if(mdp==""){
                               
                                document.getElementById('erreurpassword').innerHTML = '*champs obligatoire';
                                return false;
                            }
                           else{
                                  document.getElementById('erreurpassword').innerHTML = '';
                                  
                              }
                              
                              if(nom==""){
                                 document.getElementById('erreurnom').innerHTML = '*champs obligatoire';
                                return false;
                            } else{
                                  document.getElementById('erreurnom').innerHTML = '';
                                  
                              }
                          
                          
                          
                          
                                if(prenom==""){
                                document.getElementById('erreurprenom').innerHTML = '*champs obligatoire';
                                return false;
                                }
                                  else{
                                  document.getElementById('erreurprenom').innerHTML = '';
                                
                              }
                              
                              if(number==""){
                                 document.getElementById('erreurnumber').innerHTML = '*champs obligatoire';
                                return false;
                            }else{
                                  document.getElementById('erreurnumber').innerHTML = '';
                                 
                              }
                              
                                if(street==""){
                                document.getElementById('erreurstreet').innerHTML = '*champs obligatoire';
                                return false;
                            }else{
                                  document.getElementById('erreurstreet').innerHTML = '';
                                  
                              }
                              
                              
                              if(cp==""){
                                document.getElementById('erreurcp').innerHTML = '*champs obligatoire';
                                return false;
                            }else{
                                  document.getElementById('erreurcp').innerHTML = '';
                                  
                              }
                              
                                if(ville==""){
                                document.getElementById('erreurville').innerHTML = '*champs obligatoire';
                                return false;
                            }else{
                                  document.getElementById('erreurville').innerHTML = '';
                                  
                              }
                              
                              
                              
                                if(tel==""){
                                document.getElementById('erreurtel').innerHTML = '*champs obligatoire';
                                return false;
                            }else{
                                  document.getElementById('erreurtel').innerHTML = '';
                                  
                              }
                              
                                                            

                  
                        }</script>
                </form>
                
            </div>
                  
            
            <div class="col-md-6"> 
                <h1>Login In</h1> 
                <p></p>
                <form action="index.php?module=Login&action=connect" method="post">
                    
                     <div class="small-3 columns">
                                <label for="email-login-label" class="right inline" ><b>E-mail</b></label>
                            </div>
                            <div class="small-9 columns">
                                <input class="email-login" type="text" id="email-login-label" name="email" placeholder="Your mail" autofocus>
                            </div>
                      <div class="small-3 columns">
                                <label for="password-login-label" class="right inline"><b>Password</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="password-login" type="password" id="password-label" name="password" placeholder="Your password" autofocus>
                            </div>
                    
                      <p></p>
                    <?php if(isset($_GET["error"])){?>
                    <container>
                    <div class="row">
                    <div class='col-md-5'>
                    <div id="alert-compte-imcomplet"  class="alert alert-warning" style=";">
                        Error: Count are unknow !


                        </div>
                    </div>
                        </div>
                    </container>
                    <?php } ?>
                    
                   <div><button type="submit" class="btn btn-primary btn-lg" >Login In</button></div>
               
                  
                </form>
             
            </div>
            
            
            


    <script>
        // petit script pour la progress bar
        function Alerte() {
           
        $("form").submit(function(event) {
                $("#alert-compte-imcomplet").slideDown("slow").delay(6000).slideUp("slow");
                //On va animer la page encore
                $("html, body").animate({
                    // un peu difficile a expliquer en gros le scrollTop va prendre la position de la scrollbar pour le premier element
                    // et le offset lui il va recup les coordonnées et top c'est les coordonnées top
                    scrollTop: $("#target-compte").offset().top - 10
                }, 1000);
                // l'aciton par defaut ne sera pas déclanchée
                event.preventDefault();
            }
        });
    </script>

            
            
            
            
        </div>
    </div>
</div>


 