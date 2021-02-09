<?php

namespace App\Controllers;
use App\Models\Presupuesto;
class PresupuestoController
{
    public function __construct(){
        $this->model = new Presupuesto();
         session_start();
       
        } 


 public function validarPresupuesto(){
       
   
                  
    
        $presupuesto = [
            'mensaje' => $_POST['mensaje'],
            'fechaInicio'=> $_POST['fechaInicio'],
             'fechaFin' => $_POST['fechaFin'],
             'cantidadInvitados'=> $_POST['cantidadInvitados'],
            'estado' =>"pendiente",
          'nombre'=>$_SESSION['user'],
           'nombreEvento'=>$_POST['nombreEvento']
        ];
       //$presupuesto['nombre']=$_SESSION['user'];
        $this->model->guardar($presupuesto);
        $datos['userLogueado'] = $_SESSION['user'];
        return view('index','datos');

    }       


public function vistaPresupuesto(){
   
    $datos['userLogueado'] = $_SESSION['user'];
    return view('presupuesto','datos');
    
    
}
public function updateEstado(){
    $estado="reservado";
    if (!empty($_GET)) {
        $id=$_GET['idPresupuesto'];}
   
$this->model->actualizarEstado($estado,$id);
$todosPresupuestos=$this->model->getPresupuestos();    
    
$datos['userLogueado'] = $_SESSION['user'];
    return view('solicitudes',compact('todosPresupuestos','datos'));
}

}








