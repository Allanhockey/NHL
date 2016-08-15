<?php

class User {

    protected $_id_user= 0;
    protected $_nom ="";
    protected $_prenom = "";
    protected $_email = "";
    protected $_mdp = "";
    protected $_num = 0;
    protected $_rue= "";
    protected $_ville = "";
    protected $_cp= "";
    protected $_tel = "";
    
    

    public function setAll($_nom,$_prenom,$_email,$_mdp,$_num,$_rue,$_ville,$_cp,$_tel) {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_email= $_email;
        $this->_mdp = $_mdp;
        $this->_num = $_num;
        $this->_rue= $_rue;
        $this->_ville = $_ville;
        $this->_cp = $_cp;
        $this->_tel = $_tel;
        
       }

    public function toString() {
        return 'Panier['
                . ' $_id_user= <b>' . $this->get_id_user() . '</b>'
                . ', $_nom= <b>' . $this->get_nom() . '</b>'
                . ', $_prenom= <b>' . $this->get_prenom() . '</b>'
                . ', $_email= <b>' . $this->get_email() . '</b>'
                . ', $_mdp= <b>' . $this->get_mdp() . '</b>'
                . ', $_num= <b>' . $this->get_num() . '</b>'
                . ', $_rue= <b>' . $this->get_rue() . '</b>'
                . ', $_ville= <b>' . $this->get_ville() . '</b>'
                . ', $_cp= <b>' . $this->get_cp() . '</b>'
                . ', $_tel= <b>' . $this->get_tel() . '</b>'
                . ']';
    }
//id_user
    public function get_id_user() {
        return $this->_id_user;
    }
    
    public function set_id_user($_id_user) {
        $this->_id_user = $_id_user;
    }
//nom
    public function get_nom() {
        return $this->_nom;
    }
    
    public function set_nom($_nom) {
        $this->_nom = $_nom;
    }
//prenom
    public function get_prenom() {
        return $this->_prenom;
    }
    
    public function set_prenom($_prenom) {
        $this->_prenom = $_prenom;
    }
    
//email
    public function get_email() {
        return $this->_email;
    }
    public function set_email($_email) {
        $this->_email = $_email;
    }
//mdp
    public function get_mdp() {
        return $this->_mdp;
    }
    public function set_mdp($_mdp) {
        $this->_mdp = $_mdp;
    }


    
    //num
    public function get_num() {
        return $this->_num;
    }
    public function set_num($_num) {
        $this->_num = $_num;
    }
    //rue
    public function get_rue() {
        return $this->_rue;
    }
    public function set_rue($_rue) {
        $this->_rue = $_rue;
    }
    //ville
    public function get_ville() {
        return $this->_ville;
    }
    public function set_ville($_ville) {
        $this->_ville = $_ville;
    }
    //cp
    public function get_cp() {
        return $this->_cp;
    }
    public function set_cp($_cp) {
        $this->_cp = $_cp;
    }
    //tel
    public function get_tel() {
        return $this->_tel;
    }
    public function set_tel($_tel) {
        $this->_tel = $_tel;
    }


}

?>