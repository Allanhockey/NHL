
<div class = "row" style="margin-left:20%; margin-right:20%;">
<?php

$tmp = new TeamBD($db);
$compteTeam = $tmp->compteTeam();
$b = 0;
$arrayEquipe = array();
$arrayEquipe = $tmp->getTeam($compteTeam);
//$arrayEquipe = $tmp->getTeamAll()

    $i = 0;
while ($i<sizeof($arrayEquipe)){ 
       ?>
    
    <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
<a href="index.php?module=Team&action=article&team=<?php echo $arrayEquipe[$i]["name_team"];?>&id=<?php echo $arrayEquipe[$i]["id_team"];?>"  >
          <img src='images/logo/<?php echo strtolower($arrayEquipe[$i]["team"]); ?>.PNG' alt="<?php echo strtolower($arrayEquipe[$i]["name_team"]); ?>" style="max-height: 100px;max-width: 100px;"></a>
      </div>
      
      <div class = "caption">
         <h4><?php echo $arrayEquipe[$i]["team"]    ; ?></h4>
          <h5><?php echo $arrayEquipe[$i]["name_team"]; ?></h5> 
      </div>
   </div>
        


               <?php  $i++;}
    ?>
    
</div>

