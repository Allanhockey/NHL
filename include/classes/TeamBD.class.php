<?php

class TeamBD extends Team {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }
// création d'un user 
    public function createEquipe() {
        try {
            $query = 'INSERT INTO "public"."EQUIPE" (team, name_team)'
                    . "VALUES('". addslashes($this->get_team()) . 
                                "', '" . addslashes($this->get_name_team()) . "')";
            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_id_team = $data["id_team"];
        }
    }
    
//    // Modification d'une equipe
//    public function update() {
//        $ok = false;
//        try {
//            $query = 'UPDATE "public"."EQUIPE" SET team = ''' . $this->get_team() . ''', name_team = ' . $this->get_name_team();
//            $resultset = $this->_db->prepare($query);
//            $resultset->execute();
//            $ok = true;
//        } catch (PDOException $e) {
//            print "Echec de la requete " . $e->getMessage();
//        }
//        return $ok;
//    }
    
        public function getTeamById($id) {
        try {
            $query = 'select "public"."EQUIPE".* FROM "public".EQUIPE where "public"."EQUIPE".id_team = ' . $id . ';';
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_id_team = $data["id_team"];
            $this->_name_team = utf8_encode($data["name_team"]);

        }
    }
    
        public function getTeamAll() {
        try {
            $query = 'select "public"."EQUIPE".TEAM, "public"."EQUIPE".NAME_TEAM from "public"."EQUIPE";';
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_team = $data["TEAM"];
            $this->_name_team = $data["NAME_TEAM"];
        }
    }
    
        public function compteTeam() {
        $total = 0;
        try {
            $queryCount = 'select count(0) as total from "public"."EQUIPE";';
            $resultset = $this->_db->prepare($queryCount);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $total = $data["total"];
        }
        return $total;
    }
    
        public function getTeam($compteEquipe) {
        $array = array();
        $i = 0;
        try {
            $query = 'SELECT * FROM "public"."EQUIPE" ';
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $array[$i]["id_team"] = $data["ID_TEAM"];
            $array[$i]["team"] = utf8_encode($data["TEAM"]);
            $array[$i]["name_team"] = $data["NAME_TEAM"];
            $i++;
        }
        return $array;
    }

//        public function getTeamByNom($var) {
//        try {
//            $query = 'select * from "public"."EQUIPE" where team = ''' . addslashes($var) . '';'';
//            $resultset = $this->_db->prepare($query);
//            $resultset->execute();
//        } catch (PDOException $e) {
//            print "Echec de la requete " . $e->getMessage();
//        }
//        while ($data = $resultset->fetch()) {
//            $this->_id_team = $data["id_team"];
//            $this->_team = utf8_encode($data["team"]);
//            $this->_name_team = utf8_encode($data["name_team"]);
//
//        }
//    }
    
//    public function getTest() {
//        $i=0;
//    try {   
//            $query = 'SELECT * FROM "public"."Marque" WHERE "public"."Marque"."ID_LABEL" = 1 ';     
//            $resultset = $this->_db->prepare($query);
//            $resultset->execute();
//            
//        } catch (PDOException $e) {
//            print "  Echec de la requete  => " . $e->getMessage();
//        }
//        while ($data = $resultset->fetch()) {
//            $array[$i]["id_team"] = $data["ID_LABEL"];
//            $array[$i]["team"] = $data["Label"];
//            $i++;
//              
//        }
//       return $array; 
//        }
}
?>