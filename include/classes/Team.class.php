<?php

class Team {

    protected $_id_team = 0;
    protected $_team = "";
    protected $_team_name = "";


    public function setAll($_team, $_team_name) {
        $this->_team = $_team;
        $this->_team_name = $_team_name;
    }

    public function setEdit($_team, $_team_name) {
        $this->_team = $_team;
        $this->_team_name = $_team_name;
    }

    public function toString() {
        return 'Equipe['
                . ' $_id_team= <b>' . $this->get_id_team() . '</b>'
                . ', $_team= <b>' . $this->get_team() . '</b>'
                . ', $_team_name= <b>' . $this->get_team_name() . '</b>'
                . ']';
    }
//ID_equipe
    public function get_id_team() {
        return $this->_id_team;
    }
    
    public function set_id_team($_id_team) {
        $this->_id_team = $_id_team;
    }
//Nom
    public function get_team() {
        return $this->_team;
    }
    public function set_team($_team) {
        $this->_team = $_team;
    }
//Avatar
    public function get_team_name() {
        return $this->_team_name;
    }
    public function set_team_name($_team_name) {
        $this->_team_name = $_team_name;
    }
}

?>