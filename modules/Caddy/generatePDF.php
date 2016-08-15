

<?php
session_start();
require('include\classes\Panier.class.php');
require('include\classes\PanierBD.class.php');
require 'db_connexion.php';
require 'Connexion.php';
$db = Connexion::getInstance($dsn, $user, $pass);
try{
$panier=new PanierBD($db);
$arrayPanier=array();    
$arrayPanier=$panier->getPanier($_SESSION["usercomplet"]["ID_user"]);
  
}
catch(PDOException $e){
    $e->getmessage();
    
}


require('PDF_Invoice.class.php');




$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();
$pdf->addSociete( "NHL SHOP",
                  "Rue Mouzin 64\n" .
                  "7390 WASMUEL\n"
                  );
$pdf->fact_dev( "Facture ", "test" );

$pdf->addDate(date("d-m-Y"));
$pdf->addClient($_SESSION["usercomplet"]["ID_user"]);
$pdf->addPageNumber("1");
$pdf->addClientAdresse(  $_SESSION["usercomplet"]["nom"]." ".$_SESSION["usercomplet"]["prenom"]."\n".$_SESSION["usercomplet"]["rue"]." ".$_SESSION["usercomplet"]["num"]."\n ".$_SESSION["usercomplet"]["cp"]." ".$_SESSION["usercomplet"]["ville"]);
$pdf->addReglement("Virement Bancaire");
$pdf->addEcheance("20-08-2016");
$pdf->addNumTVA("417.621.622");
//$pdf->addReference("Devis ... du ....");
$cols=array( "REFERENCE"    => 23,
             "DESIGNATION"  => 78,
             "QUANTITE"     => 22,
             "P.U. HT"      => 26,
            "MONTANT H.T." => 30,
             "TVA"          => 11 );
$pdf->addCols( $cols);
$cols=array( "REFERENCE"    => "L",
             "DESIGNATION"  => "L",
             "QUANTITE"     => "C",
             "P.U. HT"      => "R",
             "MONTANT H.T." => "R",
             "TVA"          => "C" );
$pdf->addLineFormat( $cols);
$pdf->addLineFormat($cols);

$y    = 109;

$somme=0;$count=0;
for($i=0;$i<sizeof($arrayPanier);$i++){
$line = array( "REFERENCE"    => "REF-".$arrayPanier[$i]["id_panier"],
               "DESIGNATION"  => $arrayPanier[$i]["descript"]." ".$arrayPanier[$i]["label"]." ".$arrayPanier[$i]["size"] ,
               "QUANTITE"     => $arrayPanier[$i]["qt"],
               "P.U. HT"      => substr($arrayPanier[$i]["prix"],0,-2),
               "MONTANT H.T." => substr($arrayPanier[$i]["prix"],0,-2)*intval($arrayPanier[$i]["qt"]),
               "TVA"          => "1" );
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;
    $somme=intval($somme)+intval(substr($arrayPanier[$i]["prix"],0,-2)*intval($arrayPanier[$i]["qt"]));
    $count++;
}


$pdf->addCadreTVAs();
        
// invoice = array( "px_unit" => value,
//                  "qte"     => qte,
//                  "tva"     => code_tva );
// tab_tva = array( "1"       => 19.6,
//                  "2"       => 5.5, ... );
// params  = array( "RemiseGlobale" => [0|1],
//                      "remise_tva"     => [1|2...],  // {la remise s'applique sur ce code TVA}
//                      "remise"         => value,     // {montant de la remise}
//                      "remise_percent" => percent,   // {pourcentage de remise sur ce montant de TVA}
//                  "FraisPort"     => [0|1],
//                      "portTTC"        => value,     // montant des frais de ports TTC
//                                                     // par defaut la TVA = 19.6 %
//                      "portHT"         => value,     // montant des frais de ports HT
//                      "portTVA"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
//                  "AccompteExige" => [0|1],
//                      "accompte"         => value    // montant de l'acompte (TTC)
//                      "accompte_percent" => percent  // pourcentage d'acompte (TTC)
//                  "Remarque" => "texte"              // texte
$tot_prods = array( array ( "px_unit" => $somme, "qte" =>1 , "tva" => 1 ));
$tab_tva = array( "1"       => 21);
$params  = array( "RemiseGlobale" => 1,
                      "remise_tva"     => 1,       // {la remise s'applique sur ce code TVA}
                      "remise"         => 0,       // {montant de la remise}
                      "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                  "FraisPort"     => 1,
                      "portTTC"        => 10,      // montant des frais de ports TTC
                                                   // par defaut la TVA = 19.6 %
                      "portHT"         => 0,       // montant des frais de ports HT
                      "portTVA"        => 19.6,    // valeur de la TVA a appliquer sur le montant HT
                  "AccompteExige" => 1,
                      "accompte"         => 0,     // montant de l'acompte (TTC)
                      "accompte_percent" => 15,    // pourcentage d'acompte (TTC)
                  "Remarque" => "Avec un acompte, svp..." );

$pdf->addTVAs( $params, $tab_tva, $tot_prods);
$pdf->addCadreEurosFrancs();
$pdf->Output();
?>




