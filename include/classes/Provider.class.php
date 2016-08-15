<?php

class Provider {

    protected $_id_provider = 0;
    protected $_provider = "";
   


    public function setAll($_provider) {
        $this->_provider = $_provider;
        
    }

    public function toString() {
        return 'Label['
                . ' $_id_provider= <b>' . $this->get_id_provider() . '</b>'
                . ', $_provider= <b>' . $this->get_provider() . '</b>'
                . ']';
    }
//ID_provider
    public function get_id_provider() {
        return $this->_id_provider;
    }
    
    public function set_id_provider($_id_provider) {
        $this->_id_provider = $_id_provider;
    }
//provider
    public function get_provider() {
        return $this->_provider;
    }
    public function set_provider($_provider) {
        $this->_provider = $_provider;
    }

}

?>