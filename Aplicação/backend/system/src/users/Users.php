<?php 

namespace QuickHelp\Users;

use JsonSerializable;
use QuickHelp\UsersLoader\UsersLoader;

class Users implements JsonSerializable {
    
    private $id;
    private $name;
    private $email;
    private $dtNascimento;
    private $cep;
    private $rua;
    private $district;
    private $city;
    private $State;
    private $numHouse;
    private $complement;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function load()
    {
        UsersLoader::load($this);
    }

    public function jsonSerialize()
    {
        $fields = get_object_vars($this);
        return $fields;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setDateNasc($dtNasc)
    {
        $this->dtNascimento = $dtNasc;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setState($state)
    {
        $this->State = $state;
    }

    public function setNumHouse($numHouse)
    {
        $this->numHouse = $numHouse;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

    public function __get($fields)
    {
        return $this->{$fields};
    }

    public function __set($field, $value)
    {
        $this->{$field} = $value;
    }
}