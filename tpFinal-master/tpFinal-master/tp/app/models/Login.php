<?php

namespace App\Models;

use App\Core\Model;

class login extends Model{
    protected $table = 'usuarios';


    public function buscarUsuario($user, $password){
        return $this->db->validarLogin($this->table,$user, $password);
    }

    public function getUsuario($nombreUsuario){
        return $this->db->buscarUsuario($this->table,$nombreUsuario);
    }
    

    
}