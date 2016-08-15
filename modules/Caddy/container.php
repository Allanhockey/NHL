    
<?php 

if(isset($_SESSION["usercomplet"]["ID_user"])){
    $panier=new PanierBD($db);
$arrayPanier=array();    
$arrayPanier=$panier->getPanier($_SESSION["usercomplet"]["ID_user"]);
    $i=0;
if(empty($arrayPanier)){
    echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-danger">' . "
there are no items in your caddy " . '</div></div></center>';
}
else{
?>

<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product</th>
                  <th>Label</th>
                  <th>Size</th>
                  <th>Quantity</th>
                  <th>Prix</th>        
                  <th>Total</th>
                
                </tr>
              </thead>
                
              <tbody>
                  
                  <?php
                  $somme=0;
                 
                  for($i=0;$i<sizeof($arrayPanier);$i++)
                  {
                     ?> 
                  
                  <tr>
                  <td><?php  echo $i+1;?></td>
                  <td><?php  echo $arrayPanier[$i]["descript"];?></td>
                  <td><?php  echo $arrayPanier[$i]["label"];?></td>
                  <td><?php  echo $arrayPanier[$i]["size"];?></td>
                  <td><?php  echo $arrayPanier[$i]["qt"];?></td>
                  <td><?php  echo substr($arrayPanier[$i]["prix"],0,-2)."€";?></td>
                  <td><?php  $total= intval($arrayPanier[$i]["prix"])*intval($arrayPanier[$i]["qt"]); 
                      $somme=intval($somme)+intval($total); 
                      
                      echo $total."€"?></td>
                
                  <td><a class="btn btn-danger" href="index.php?module=Caddy&action=removeitem&idpan=<?php  echo $arrayPanier[$i]["id_panier"];?>&qt=<?php  echo $arrayPanier[$i]["qt"];?>" role="button" ><span class="glyphicon glyphicon-remove-circle">remove</span></a></td>      
                      
                </tr>
                      
             
                  
                <?php    
                       
                         
                    }
                  
                                 
                  ?>
                  
                            
                  
                               
                
              </tbody>
            </table>
           </div>
            <div class="col-md-12 col-md-offset-10">
              <h4>Total : <?php echo $somme.'€';?></h4>
            </div>
        </div>
         
         <div class="col-md-12 col-md-offset-10"> <a href="indexpdf.php/modules/Caddy/generatePDF.php&idclient=<?php echo $_SESSION["usercomplet"]["ID_user"];?>" onclick="window.open(this.href); return false;" class="btn btn-primary btn-lg" value="pdf" role="bouton">  Bill PDF  </a>
          
               
           <a href="#COMMANDEVALIDER"  class="btn btn-primary btn-lg" value="confirm" role="bouton">Confirm</a>
          </div>
                 
          

          
      </div>
    </div>
<?php }
}
else{
     echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-warning">' . "
Caddy is not available offline , please connect you  " . '</div></div></center>';
    
}?>


