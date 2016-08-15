

<div class = "row" style="margin-left:20%; margin-right:20%;">
<?php
$tmp = new ProduitBD($db);
$arrayProd = array();
$arrayProd = $tmp->getAllProd();
//var_dump($arrayProd);
$i = 0;
while ($i<sizeof($arrayProd)){ 
      if(strstr($arrayProd[$i]["file"],"_skates")) { ;?> 
    
    <div class = "col-sm-6 col-md-3">
        <div class = "caption">
         <h5 style="font-weight:bold;"> <?php echo $arrayProd[$i]["Denomination"];?> </h5>        
        </div>
      <div class = "thumbnail">
          <a href="index.php?module=Skates&action=detail&id=<?php echo $arrayProd[$i]["ID_produit"] ?>">
              
 
              <img src='images/article/skates/<?php echo strtolower($arrayProd[$i]["file"]);?>'
                   alt='images/article/skates/<?php echo strtolower($arrayProd[$i]["file"]);?>' 
                   style="max-height: 100px;max-width: 100px;" > 
            

            
          
                  
            
          </a>
      </div>
       <div class = "caption" >
         <h5 style="font-weight:bold;"> <?php echo substr($arrayProd[$i]["Prix"],0,-2)."€";?> </h5>        
        </div>
     
   </div>
         <?php }  ?>


               <?php  $i++;}
    ?>
    
</div>

