<?php 
$tmp = new ProduitBD($db);
$arrayDetails = array();
$id_produit=$_GET["id"];
$arrayDetails = $tmp->getDetails($id_produit);
//var_dump($arrayDetails);

?>

<div class="section">
    <div class="container">
        <div class="row"> 
            <div class="col-md-4">
                <img src='images/article/sticks/<?php echo $arrayDetails[0]['file'] ?>'  
                     alt="erreur"
                     class="img-responsive">
            </div>
            <div class="col-md-8"> 
                <h1><?php echo $arrayDetails[0]['Denomination']?></h1>
                <h3><?php echo $arrayDetails[0]['Description']?></h3>
                <h5> Label: <?php 
                                $label=new LabelBD($db);
                                $arraylabel=array();
                                $arraylabel= $label->getLabel($arrayDetails[0]['ID_label']);
                                echo $arraylabel[0]["Label"];?></h5>
                <h5> Made in <?php 
                        $provider=new ProviderBD($db);
                        $arrayProvider=array();
                        $arrayProvider= $provider->getProvider($arrayDetails[0]['ID_provider']);
                        echo $arrayProvider[0]["Provider"];
                    ?></h5> 
                <h5>Price: <?php echo substr($arrayDetails[0]['Prix'],0,-2)."€";?></h5>
                
              <?php if($arrayDetails[0]['size']=="true"){?>
                   <form action="index.php?module=Caddy&action=addcaddy&idprod=<?php echo $_GET["id"]?>" method="post">
                        <div class="col-md-4">Pattern : 
                          
                                <select name="sizechoice" class="form-control input-sm">
                                    <option>Left crosby P92 FLEX 95</option>
                                    <option>Left kane P98 FLEX 80</option>
                                    <option>Left toews p102 FLEX 75</option>
                                    <option>Left Oshie p78  FLEX 105</option>
                                    <option>Right crosby P92 FLEX 95</option>
                                    <option>Right kane P98 FLEX 80</option>
                                    <option>Right toews p102 FLEX 75</option>
                                    <option>Right Oshie p78  FLEX 105</option>
                                    
                                </select>
                           
                        </div>
                    
                <?php }?>
                
                <div class="col-xs-2"> 
                    Quantity 
                   <input type= "number" class="form-control" id="formGroupInputSmall" placeholder="1" name="quantity" min="1" value="1">
                 </div>
                   
                
                
            
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-success"><span class="fa fa-shopping-cart">  </span>  Caddy </button>
            </div>
       
                       </form>
            </div>
        </div>
    </div>
</div>

