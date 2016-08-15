<?php //var_dump($_SESSION);?> 

<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="images\profil.png"    class="img-responsive">
              
              
          </div>
          <form action="index.php?module=Profil&action=update" method="post"  name="profil-form"  onsubmit="return check();">  
            <table  class="col-lg-6">
                <tr>
                <td><div class="small-3 columns">
                               <label for="email-label" class="right inline" id="emailtitre"><b>E-mail</b></label>
                    </div>
                    <div class="small-11 columns">
                     <input class="" type="text" id="email-label" name="email" value="<?php echo $_SESSION["usercomplet"]["email"]?>        " >
                                <span id="erreuremail" style="color:red;"></span></div>
                                
                </td>
                    
                <td><div class="small-3 columns">
                                <label for="password-label" class="right inline"><b>Password</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="" type="password" id="password-label" name="password" value="<?php echo $_SESSION["usercomplet"]["mdp"]?>">
                                <span id="erreurpassword" style="color:red;"></span>
                            </div>
                    </td>
                    
                    
                
                </tr>
                <tr>
                    <td>
                        <div class="small-3 columns">
                                <label for="name-label" class="right inline"><b>Name</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="" type="text" id="nom-label" name="nom" value="<?php echo $_SESSION["usercomplet"]["nom"]?>">
                                <span id="erreurnom" style="color:red;"></span>
                            </div>
                    
                    </td>
                    
                    <td> 
                        <div class="small-3 columns">
                                <label for="prenom-label" class="right inline"><b>First name</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="" type="text" id="prenom-label" name="prenom" value="<?php echo $_SESSION["usercomplet"]["prenom"]?>">
                                <span id="erreurprenom" style="color:red;"></span>
                            </div> 
                    
                    </td>
                
                </tr>
                
                <tr>
                    <td>
                        <div class="small-3 columns">
                                <label for="street-label" class="right inline"><b>Street</b></label>
                                                          </div>
                            <div class="small-9 columns">
                                  <input class="" type="text" id="street-label" name="street" value="<?php echo $_SESSION["usercomplet"]["rue"]?>">
                                <span id="erreurstreet" style="color:red;"></span>
                            </div>
                    
                    </td>
                    <td>
                    <div class="small-3 columns">
                        <label for="num-label" class="right inline"><b>Number</b></label>
                            </div>
                            <div class="small-9 columns">
                                <input class="" type="text" id="number-label" name="number" value="<?php echo $_SESSION["usercomplet"]["num"]?>">
                                <span id="erreurnumber" style="color:red;"></span>
                            </div>
                    </td>
                </tr>
                
                
                <tr>
                <td>
                    <div class="small-3 columns">
                            <label for="CP-label" class="right inline"><b>Postal code</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="cp-label" name="CP" value="<?php echo $_SESSION["usercomplet"]["cp"]?>">
                                <span id="erreurcp" style="color:red;"></span>
                            </div> 
                    
                </td>
                    <td>
                      <div class="small-3 columns">
                            <label for="Ville-label" class="right inline"><b>City</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="Ville-label" name="ville" value="<?php echo $_SESSION["usercomplet"]["ville"]?>">
                                <span id="erreurville" style="color:red;"></span>
                            </div> 
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <div class="small-3 columns">
                            <label for="Tel-label" class="right inline"><b>Phone</b></label>
                            </div>
                            <div class="small-9 columns">
                                  <input class="inscriptionProgressRequis" type="text" id="tel-label" name="tel" value="<?php echo $_SESSION["usercomplet"]["tel"]?>">
                                <span id="erreurtel" style="color:red;"></span>
                            </div>
                    </td>
                </tr>
                    <tr>
                        <td></td>
                        <td> <div><input type="submit" class="btn btn-primary btn-lg"  id='buttonupdate' value='Confirm'></div></td>
                </tr>
            </table>
            </form>
           
            
            
           
                                      
                   
 
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
           
            
            

           
            
          </div>
        </div>
      </div>