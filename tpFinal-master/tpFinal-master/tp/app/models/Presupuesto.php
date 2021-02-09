<?php

namespace App\Models;

use App\Core\Model;

class Presupuesto extends Model
{
    protected $table = 'usuarios';
    protected $tableEventos = 'eventos';
    protected $tablePresupuesto = 'presupuesto';
    

         

 
    
public function guardar(array $presupuesto){
 
    
    $this->db->insert($this->tablePresupuesto, $presupuesto);
}
public function actualizarEstado($estado,$id){
     $this->db->updatePresupuesto($this->tablePresupuesto,$estado,$id);
    /*  $presupuestos= $this->db->selectAll($this->tablePresupuesto);
  
    $todosPresupuestos = json_decode(json_encode($presupuestos), True);
    */
    
     
}
public function getPresupuestos(){
 
    $presupuestos= $this->db->selectAll($this->tablePresupuesto);
  
    $misPresupuestos = json_decode(json_encode($presupuestos), True);
    return $misPresupuestos;
}
}