<?php

class ProduitBD extends Produit {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }
// création d'un user 
    public function createProduit() {
        try {
            $query = 'INSERT INTO "public"."Produit" (id_produit,id_label,id_provider ,id_team, denomination,description,prix,file,size)'
                    . "VALUES('". addslashes($this->get_id_produit()) ."'
                    ,'" . addslashes($this->get_id_provider()) . "'
                    ,'" . addslashes($this->get_id_team()) . "'
                    ,'" . addslashes($this->get_denomination()) . "'
                    ,'" . addslashes($this->get_description()) . "'
                    ,'" . addslashes($this->get_prix()) . "'
                    ,'" . addslashes($this->get_file()) . "'
                    ,'" . addslashes($this->get_size()) . "'
                        
                    )";
            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_id_team = $data["id_produit"];
        }
    }
    

    
        public function getProdByTeam($id_team) {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_produit", "ID_label", "ID_provider", "ID_team", "Denomination", 
                        "Description", "Prix", file, size
                          FROM "PRODUIT"
                          WHERE "ID_team" ='.$id_team.';'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
//            $this->_id_produit = $data["ID_produit"];
//            $this->_denomination = utf8_encode($data["Denomination"]);
             $array[$i]["ID_produit"] = $data["ID_produit"];
             $array[$i]["Denomination"] = $data["Denomination"];
            $array[$i]["ID_label"] = $data["ID_label"];
            $array[$i]["ID_provider"] = $data["ID_provider"];
            $array[$i]["ID_team"] = $data["ID_team"];
            $array[$i]["Description"] = $data["Description"];
            $array[$i]["file"] = $data["file"];
            $array[$i]["size"] = $data["size"];
            $array[$i]["Prix"] =utf8_encode($data["Prix"]);
            
            $i++;

        }
            return $array;
            
    }
    
    
     public function getDetails($id_produit) {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_produit", "ID_label", "ID_provider", "ID_team", "Denomination", 
                        "Description", "Prix", file, size
                          FROM "PRODUIT"
                          WHERE "ID_produit" ='.$id_produit.';'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
//            $this->_id_produit = $data["ID_produit"];
//            $this->_denomination = utf8_encode($data["Denomination"]);
             $array[$i]["ID_produit"] = $data["ID_produit"];
             $array[$i]["Denomination"] = $data["Denomination"];
            $array[$i]["ID_label"] = $data["ID_label"];
            $array[$i]["ID_provider"] = $data["ID_provider"];
            $array[$i]["ID_team"] = $data["ID_team"];
            $array[$i]["Description"] = $data["Description"];
            $array[$i]["file"] = $data["file"];
            $array[$i]["size"] = $data["size"];
            $array[$i]["Prix"] =utf8_encode($data["Prix"]);
            
            $i++;

        }
            return $array;
            
    }
    
     public function getAllProd() {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_produit", "ID_label", "ID_provider", "ID_team", "Denomination", 
                        "Description", "Prix", file, size
                          FROM "PRODUIT"
                          ORDER BY "ID_produit";'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
//            $this->_id_produit = $data["ID_produit"];
//            $this->_denomination = utf8_encode($data["Denomination"]);
             $array[$i]["ID_produit"] = $data["ID_produit"];
             $array[$i]["Denomination"] = $data["Denomination"];
            $array[$i]["ID_label"] = $data["ID_label"];
            $array[$i]["ID_provider"] = $data["ID_provider"];
            $array[$i]["ID_team"] = $data["ID_team"];
            $array[$i]["Description"] = $data["Description"];
            $array[$i]["file"] = $data["file"];
            $array[$i]["size"] = $data["size"];
            $array[$i]["Prix"] =utf8_encode($data["Prix"]);
            
            $i++;

        }
            return $array;
            
    }
    
    

}
?>