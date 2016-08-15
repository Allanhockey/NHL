<?php

class UserBD extends User {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }
// création d'un user 
    public function createUser() {
        try {
            $query = 'INSERT INTO "Utilisateur"(nom, prenom, email, mdp, num, rue, ville, cp, tel)'
                    . "VALUES(
                    '" . addslashes($this->get_nom()) . "'
                    ,'" . addslashes($this->get_prenom()) . "'
                    ,'" . addslashes($this->get_email()) . "'
                    ,'" . addslashes($this->get_mdp()) . "'
                    ,'" . addslashes($this->get_num()) . "'
                    ,'" . addslashes($this->get_rue()) . "'
                    ,'" . addslashes($this->get_ville()) . "'
                    ,'" . addslashes($this->get_cp()) . "'
                    ,'" . addslashes($this->get_tel()) . "'
                        
                    )";
            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_id_team = $data["id_user"];
        }
    }
    
   
    
     public function updateUser($iduser) {
        try {
            $query = 'UPDATE "Utilisateur"'
                    ." SET 
                     nom='". addslashes($this->get_nom())."', 
                     prenom='".addslashes($this->get_prenom())."',
                     email='".addslashes($this->get_email())."',
                     mdp='".addslashes($this->get_mdp())."',
                     num='".addslashes($this->get_num())."',
                     rue='".addslashes($this->get_rue())."',
                     ville='".addslashes($this->get_ville())."',
                     cp='".addslashes($this->get_cp())."', 
                     tel='".addslashes($this->get_tel())."'   
                     " .'WHERE "ID_user"='.$iduser.';';
            echo $query;
                    
            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $this->_id_team = $data["id_user"];
        }
    }


    
        public function getUser($id_User) {
             $array = array();
             $i=0;
        try {
          
            $query = 'SELECT "ID_user", nom, prenom, email, mdp, num, rue, ville, cp, tel
                        FROM "Utilisateur"
                          WHERE "ID_user" ='.$id_User.';'; 
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {

             $array[$i]["ID_user"] = $data["ID_user"];
             $array[$i]["nom"] = $data["nom"];
            $array[$i]["prenom"] = $data["prenom"];
            $array[$i]["email"] = $data["email"];
            $array[$i]["mdp"] = $data["mdp"];
            $array[$i]["num"] = $data["num"];
            $array[$i]["rue"] = $data["rue"];
            $array[$i]["ville"] = $data["ville"];
            $array[$i]["cp"] =$data["cp"];
            $array[$i]["tel"] =$data["tel"];
            
            $i++;

        }
            return $array;
            
    }
    
    public function getCheckMail($email) {
             $array = array();
             $i=0;
        
             $email="'".$email."'";
        try {
          
            $query = 'SELECT "ID_user" FROM "Utilisateur" WHERE email='.$email.';'; 
           // echo $query;
  
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {

             $array[$i]["ID_user"] = $data["ID_user"];
             $i++;

        }

        if(empty($array)){
            return false;
            
        }
        else 
        {
            return true;
        }
            
    }
    
    
    
    public function verifConnect($email,$password){
         $array = array();
             $i=0;
         $email="'".$email."'";
         $password="'".$password."'";
        try {
          
            $query = 'SELECT "ID_user", nom, prenom, email, mdp, num, rue, ville, cp, tel
                        FROM "Utilisateur"
                          WHERE email ='.$email.' 
                          AND mdp='.$password.';'; 
            echo $query;
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            
        } catch (PDOException $e) {
            print "Echec de la requete " . $e->getMessage();
        }
        while ($data = $resultset->fetch()) {

             $array[$i]["ID_user"] = $data["ID_user"];
             $array[$i]["nom"] = $data["nom"];
            $array[$i]["prenom"] = $data["prenom"];
            $array[$i]["email"] = $data["email"];
            $array[$i]["mdp"] = $data["mdp"];
            $array[$i]["num"] = $data["num"];
            $array[$i]["rue"] = $data["rue"];
            $array[$i]["ville"] = $data["ville"];
            $array[$i]["cp"] =$data["cp"];
            $array[$i]["tel"] =$data["tel"];
            
            $i++;

        }
            return $array;
    }
    
    
     
    
     
    
    

}
?>