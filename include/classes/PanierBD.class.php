<?php

class PanierBD extends Panier {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }
// création d'un panier 
    public function createPanier() {
        try {
            $query = 'INSERT INTO "Panier"("ID_user", "ID_produit", "quantity", date, size)'
                    ." VALUES(". addslashes($this->get_id_user()) ."
                    ," . addslashes($this->get_id_produit()) . "
                    ," . addslashes($this->get_quantity()) . "
                    ,'" . addslashes($this->get_date()) . "'
                    ,'" . addslashes($this->get_size()) . "'
                                           
                    )";
           
            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
       
    }
    

    
    
    public function getPanier($iduser){
        $array=array();
        $i=0;
        try{
            $query='SELECT 
                      "Panier"."ID_panier" as "id_panier",
                      "Panier".quantity as "qt", 
                      "Panier".date as "date", 
                      "Panier".size as "size",  

                      "PRODUIT"."Description" as "descript", 
                      "PRODUIT"."Prix" as "prix", 

                      "Marque"."Label" as "label"
                    FROM 
                      public."Panier", 
                      public."PRODUIT", 
                      public."Marque"
                    WHERE 
                      "Panier"."ID_produit" = "PRODUIT"."ID_produit" AND
                      "Marque"."ID_LABEL" = "PRODUIT"."ID_label"
                      AND "Panier"."ID_user"='.$iduser.';';
            
            
                $resultset = $this->_db->prepare($query);
                $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            
             $array[$i]["qt"] = $data["qt"];
             $array[$i]["date"] = $data["date"]; 
             $array[$i]["size"] = $data["size"];
             $array[$i]["descript"] = $data["descript"];
             $array[$i]["prix"] = $data["prix"];
             $array[$i]["label"] = $data["label"];
             $array[$i]["id_panier"] = $data["id_panier"];
            
           
            
            $i++;

        }
            return $array;
                        


        }
 
    
     public function deleteitemPanier($idpanier){
        $array=array();
        $i=0;
        try{
            $query='DELETE FROM "Panier"
                    WHERE "ID_panier" ='.$idpanier.';';
            
            
                $resultset = $this->_db->prepare($query);
                $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        
        }
        }
}
?>