<?php

class Label {

    protected $_id_label = 0;
    protected $_label = "";
   


    public function setAll($_label) {
        $this->_label = $_label;
        
    }

    public function toString() {
        return 'Label['
                . ' $_id_label= <b>' . $this->get_id_label() . '</b>'
                . ', $_label= <b>' . $this->get_label() . '</b>'
                . ']';
    }
//ID_label
    public function get_id_label() {
        return $this->_id_label;
    }
    
    public function set_id_label($_id_label) {
        $this->_id_label = $_id_label;
    }
//label
    public function get_label() {
        return $this->_label;
    }
    public function set_label($_label) {
        $this->_label = $_label;
    }

}

?>