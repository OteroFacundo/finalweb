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
    echo "get eventos";
    $evento = $this->db->getEventos($this->tableEventos);
    var_dump($evento);

    $misEventos = json_decode(json_encode($evento), True);
    echo $misEventos['nombreEvento'];
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