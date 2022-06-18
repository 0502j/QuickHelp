<?php 

namespace QuickHelp\Users;

use JsonSerializable;

class Users implements JsonSerializable {
    
    private $id;
    private $name;
    private $email;
    private $dt_nascimento;
    private $cep;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $nr_casa;
    private $complemento;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function jsonSerialize()
    {
        $fields = get_object_vars($this);
        return $fields;
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