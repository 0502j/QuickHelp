<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caixa_Gestao extends MY_Model {

    public $table = 'CAIXA';
    public $primary_key = 'NR_CAIXA';
    public $fillable = array('DS_CAIXA');
    public $protected = array('NR_CAIXA');

    function __construct() 
    {
        $CI =& get_instance();
        $this->selectDB($CI->conexao);
        $this->_database_connection  = $CI->conexao;
        $this->return_as = 'array';
        $this->timestamps = false;
        parent::__construct();
    }

    public function getUser($email, $password)
    {
        $this->_database->select('u.id');
        $this->_database->from  ('users u');
        $this->_database->where ('u.email', $email);
        $this->_database->where ('u.password', $password);
        
        $query = $this->_database->get();
        return ($query-> num_rows() > 0) ? $query->result_array : [];
    }

    public function createUser($userData)
    {
        $data = [
            'email' => $userData['email'],
            'password' => "MD5({$userData['password']})",
            'dt_nascimento' => $userData['dt_nascimento']
        ];
        $result = $this->_database->insert($data);
        
        if(!empty($result)) {
            $this->_database->select("id");
            $this->_database->from  ("Users");
            $this->_database->where ("email", $userData['email']);
            $this->_database->where ("dt_nascimento", $userData['password']);

            $query = $this->_database->get();
        }
        return ($query->num_rows() > 0) ? $query->id : '';
    }

    public function deleteUser($idUser)
    {
        $this->_database->where('id', $idUser);
        $this->_database->delete('user');

        $result = $this->_database->get();
        return ($result ? true : false);
    }
}