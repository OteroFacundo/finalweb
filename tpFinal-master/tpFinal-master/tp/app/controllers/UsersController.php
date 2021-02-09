<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Models\Users;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->model = new Users();
    }

    /**
     * Show all users.
     */
    public function index()
    {
        $users = $this->model->get();
        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        $user = [
            'name' => $_POST['name']
        ];
        $this->model->insert($user);
        return redirect('users');
    }

public function vistaUsuario(){
     echo '<script language="javascript">';
        echo 'alert("EL USUARIO YA EXISTE")';
        echo '</script>';
          return view('register');
      }
      
      public function validarUsuario(){
       //verifico si existe el usuario
        
          $statement= $this->model->buscarUsuario($_POST['nombre']);      
    if(empty($statement)){
        $usuario = [
            'nombre' => $_POST['nombre'],
            'password' => $_POST['password'],
           'apellido'=> $_POST['apellido'],
            'nombrePersona' => $_POST['nombrePersona'],
            'email'=> $_POST['email'],
            'telefono'=> $_POST['telefono'],
             'idRol' =>2
            ];
       
        $this->model->insert($usuario);
        return view('index');
    }else{
        return $this->vistaUsuario();
    }       
}


}
