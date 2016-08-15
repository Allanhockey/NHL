<?php

class panier {

    protected $_id_panier= 0;
    protected $_id_user = 0;
    protected $_id_produit = 0;
    protected $_quantity = 0;
    protected $_date = "00/00/0000";
    protected $_size="";
    
    
   


    public function setAll($_id_user,$_id_produit,$_quantity,$_date,$_size) {
        $this->_id_user = $_id_user;
        $this->_id_produit = $_id_produit;
        $this->_quantity= $_quantity;
        $this->_date = $_date;
        $this->_size=$_size;
        
    }

    public function toString() {
        return 'Panier['
                . ' $_id_panier= <b>' . $this->get_id_panier() . '</b>'
                . ', $_id_user= <b>' . $this->get_id_user() . '</b>'
                . ', $_id_produit= <b>' . $this->get_id_produit() . '</b>'
                . ', $_quantite= <b>' . $this->get_quantity() . '</b>'
                . ', $_date= <b>' . $this->get_date() . '</b>'
                . ', $_size= <b>' . $this->get_size() . '</b>'
                . ']';
    }
//ID_panier
    public function get_id_panier() {
        return $this->_id_panier;
    }
    
    public function set_id_panier($_id_panier) {
        $this->_id_panier = $_id_panier;
    }
//ID_USER
    public function get_id_user() {
        return $this->_id_user;
    }
    
    public function set_id_user($_id_user) {
        $this->_id_user = $_id_user;
    }
//ID_produit
    public function get_id_produit() {
        return $this->_id_produit;
    }
    
    public function set_id_produit($_id_produit) {
        $this->_id_produit = $_id_produit;
    }
    
//quantite
    public function get_quantity() {
        return $this->_quantity;
    }
    public function set_quantity($_quantity) {
        $this->_quantity = $_quantity;
    }
//date
    public function get_date() {
        return $this->_date;
    }
    public function set_date($_date) {
        $this->_date = $_date;
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