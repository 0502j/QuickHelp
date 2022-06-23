<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoricModel extends MY_Model {

    public $table = 'historic';
    public $primary_key = 'id';
    public $fillable = [];

    public function getHistoric($idUser)
    {
        $this->_database->select("h.id id_historic");
        $this->_database->select("h.dt_historic");
        $this->_database->select("d.id id_diagnostic");
        $this->_database->select("d.name_diagnostic");
        $this->_database->from  ("historic h");
        $this->_database->jois  ("users u", "u.id = h.id_user");
        $this->_database->jois  ("diagnostic d", "d.id = h.id_diagnostic");
        $this->_database->where ("h.id_user", $idUser);

        $query = $this->_database->get();
        return ($query->num_rows() > 0) ? $query->result_array() : [];
    }

    public function getSymptomForHistoric($idDiagnostic)
    {
        $this->_database->select("s.name_symptom");
        $this->_database->from  ("symptom s");
        $this->_database->join  ("historic h", "h.id_diagnotic = s.id_diagnostic");
        $this->_database->where ("s.id_diagnostic", $idDiagnostic);

        $query = $this->_database->get();
        return ($query->num_rows() > 0) ? $query->result_array() : [];
    }
}