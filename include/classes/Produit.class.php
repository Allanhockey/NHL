<?php

class Produit {

    protected $_id_produit = 0;
    protected $_id_label = 0;
    protected $_id_provider = 0;
    protected $_id_team = 0;
    protected $_denomination="";
    protected $_description="";
    protected $_prix = 0;
    protected $_file = "";
    protected $_size=null;
    


    public function setAll($_id_produit, $_id_label,$_id_provider ,$_id_team, $_denomination,$_description,$_prix,$_file,$_size) {
        $this->_id_produit = $_id_produit;
        $this->_id_label = $_id_label;
        $this->_id_provider = $_id_provider;
        $this->_id_team = $_id_team;
        $this->_id_denomination = $_id_denomination;
        $this->_id_description = $_id_description;
        $this->_prix = $_prix;
        $this->_file = $_file;
        $this->_size = $_size;
    }

    
    public function toString() {
        return 'Produit['
                . ' $_id_produit= <b>' . $this->get_id_produit() . '</b>'
                . ', $_id_label= <b>' . $this->get_id_label() . '</b>'
            . ', $_id_provider= <b>' . $this->get_id_provider() . '</b>'
            . ', $_id_team= <b>' . $this->get_id_team() . '</b>'
            . ', $_denomination= <b>' . $this->get_denomination() . '</b>'
            . ', $_description= <b>' . $this->get_dscription() . '</b>'
            . ', $_prix= <b>' . $this->get_prix() . '</b>'
            . ', $_file= <b>' . $this->get_file() . '</b>'
            . ', $_size= <b>' . $this->get_size() . '</b>'
                . ']';
    }
//ID_produit
    public function get_id_produit() {
        return $this->_id_produit;
    }
    
    public function set_id_produit($_id_produit) {
        $this->_id_produit = $_id_produit;
    }

//ID_label
    public function get_id_label() {
        return $this->_id_label;
    }
    
    public function set_id_label($_id_label) {
        $this->_id_label = $_id_label;
    }
    
    //ID_provider
    public function get_id_provider() {
        return $this->_id_provider;
    }
    
    public function set_id_provider($_id_provider) {
        $this->_id_provider = $_id_provider;
    }
    
    //ID_team   
    public function get_id_team() {
        return $this->_id_team;
        
    }
    
    public function set_id_team($_id_team) {
        $this->_id_team = $_id_team;
    }
    //denomination
    public function get_denomination() {
        return $this->_denomination;
    }
    
    public function set_denomination($_denomination) {
        $this->_denomination = $_denomination;
    }
    
    //description
    public function get_description() {
        return $this->_description;
    }
    
    public function set_description($_description) {
        $this->_description  = $_description;
    }
    
    //prix
    public function get_prix() {
        return $this->_prix;
    }
    
    public function set_prix($_prix) {
        $this->_prix = $_prix;
    }
    
    //file
    public function get_file() {
        return $this->_file;
    }
    
    public function set_file($_file) {
        $this->_file = $_file;
    }

    //size
    public function get_size() {
        return $this->_size;
    }
    
    public function set_size($_size) {
        $this->_size = $_size;
    }
}

?>