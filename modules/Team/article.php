<div class = "row" style="margin-left:20%; margin-right:20%;">
<?php
$tmp = new ProduitBD($db);
$arrayProd = array();
$id_team=$_GET["id"];
$arrayProd = $tmp->getProdByTeam($id_team);
   //var_dump($arrayProd);

  $erreurText="Sorry we've no products for this team";
    
 if($arrayProd==null) {
    echo '<center><div class ="col-md-6 col-md-offset-3"><div class="alert alert-warning">' . $erreurText . '</div></div></center>';
 }
 
    $i = 0;
while ($i<sizeof($arrayProd)){ 
       ?>
    
    <div class = "col-sm-6 col-md-3">
        <div class = "caption">
         <h5 style="font-weight:bold;"> <?php echo $arrayProd[$i]["Denomination"];?> </h5>        
        </div>
      <div class = "thumbnail">
    
              
<!--             verifier si c 'est un jersey dans les produit   -->
            <?php if(strstr($arrayProd[$i]["file"],"_jersey")) { ;?> 
            <a href="index.php?module=Jersey&action=detail&id=<?php echo $arrayProd[$i]["ID_produit"] ?>">
         
        <img src='images/jersey/<?php echo strtolower($arrayProd[$i]["file"]);?>'
                   alt='images/jersey/<?php echo strtolower($arrayProd[$i]["file"]);?>' 
                   style="max-height: 100px;max-width: 100px;" > 
            
<!--            // Si non article -->
              <?php } else { ?>
          <a href="index.php?module=Team&action=detail&id=<?php echo $arrayProd[$i]["ID_produit"] ?>&equipe=<?php echo strtolower($_GET["team"])?>">
                   <img src='images/article/<?php echo strtolower($_GET["team"]) ?>/<?php echo strtolower($arrayProd[$i]["file"]); ?>'                alt="'images/article/<?php echo strtolower($_GET["team"]) ?>/<?php echo strtolower($arrayProd[$i]["file"]); ?>" 
                        style="max-height: 100px;max-width: 100px;"> 
              <?php ;} ?>
            
          </a>
      </div>
       <div class = "caption" >
         <h5 style="font-weight:bold;"> <?php echo substr($arrayProd[$i]["Prix"],0,-2)."€";?> </h5>        
        </div>
     
   </div>
        


               <?php  $i++;}
    ?>
    
</div>


