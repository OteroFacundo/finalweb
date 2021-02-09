<?php

namespace App\Models;

use App\Core\Model;

class Pages extends Model
{
    protected $table = 'usuarios';
protected $tableEventos='eventos';
protected $tablePresupuesto='presupuesto';
protected $tableImagenes='galeriaimagenes';
public function getEventos(){
    
    $evento = $this->db->getEventos($this->tableEventos);
    
    $misEventos = json_decode(json_encode($evento), True);
    return $misEventos;
}
public function getPresupuestos(){
 
    $presupuestos= $this->db->selectAll($this->tablePresupuesto);
  
    $misPresupuestos = json_decode(json_encode($presupuestos), True);
    return $misPresupuestos;
}

public function insert(array $turnos)
{
    $this->db->insert($this->tableImagenes, $turnos);
}
public function getImagenes()
{ 
    $imagenes=$this->db->dameImg($this->tableImagenes);
    $misImagenes = json_decode(json_encode($imagenes), True);
  
    return $misImagenes;
}

public function guardarimg($img){

    $this->db->insertImagen($this->tableImagenes, $img);

}

}