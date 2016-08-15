<?php

class ProviderBD extends Provider {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

     public function getProvider($id_provider) {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_provider", "PROVIDER"
                        FROM "Fournisseur"
                        WHERE "ID_provider"='.$id_provider.';'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {

             $array[$i]["ID_provider"] = $data["ID_provider"];
             $array[$i]["Provider"] = $data["PROVIDER"];
                   
            $i++;

        }
            return $array;
            
    }
    

}
?>