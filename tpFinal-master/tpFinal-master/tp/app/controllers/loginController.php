<?php

namespace App\Controllers;

use App\Core\Controller;

use App\Models\Login;

class loginController extends Controller{
    public function __construct(){
        $this->model = new Login();
    }

    public function validarLogin(){
        //$arrayUsuarios=$this->model->get();
       // compact('arrayUsuarios');
        $user=$_POST['nombre'];
        $password=$_POST['password'];
        $statement= $this->model->buscarUsuario($user,$password); 
    if(empty($statement)){
        echo '<script language="javascript">';
        echo 'alert("Usuario o Contraseña Incorrecta")';
        echo '</script>';
        return view ('login');
     }else{
         session_start();
         $_SESSION['user']=$_POST['nombre'];
         $datos['userLogueado'] = $_SESSION['user'];
        $datos['logueado']="true";
        return view('index',compact('datos')); 
        //return view ('index',compact('datos'));
        }       
    }
}
