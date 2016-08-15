<?php

class LabelBD extends Label {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

     public function getLabel($id_Label) {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_LABEL", "Label"
                    FROM "Marque"
                        WHERE "ID_LABEL"='.$id_Label.';'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {

             $array[$i]["ID_label"] = $data["ID_LABEL"];
             $array[$i]["Label"] = $data["Label"];
                   
            $i++;

        }
            return $array;
            
    }
    

}
?>