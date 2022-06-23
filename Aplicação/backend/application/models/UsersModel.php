<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends MY_Model {

    public $table = 'users';
    public $primary_key = 'id';
    public $fillabel = [];

    public function getUser($id)
    {
        $this->_database->select("u.id");
        $this->_database->select("u.username");
        $this->_database->select("u.dt_nascimento");
        $this->_database->select("u.email");
        $this->_database->select("u.password");
        $this->_database->select("u.cep");
        $this->_database->select("u.rua");
        $this->_database->select("u.bairro");
        $this->_database->select("u.cidade");
        $this->_database->select("u.estado");
        $this->_database->select("u.nr_casa");
        $this->_database->select("u.complemento");
        $this->_database->from  ("users u");
        $this->_database->where ("u.id", $id);

        $query = $this->_database->get();
        return ($query->num_rows() > 0) ? $query->result_array() : [];
    }

    public function getUserLogin($email, $password)
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
            'username' => $userData['username']
        ];
        $result = $this->_database->insert($data);
        
        if(!empty($result)) {
            $this->_database->select("id");
            $this->_database->from  ("Users");
            $this->_database->where ("email", $userData['email']);
            $this->_database->where ("password", md5($userData['password']));

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