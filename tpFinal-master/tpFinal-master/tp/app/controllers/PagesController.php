<?php

namespace App\Controllers;
use App\Models\pages;
class PagesController
{
    public function __construct(){
        $this->model = new Pages();
   session_start();    
    } 
     /* Show the home page.
     */
    public function home()
    { 
        if(empty($_SESSION)){
        
            return view('index');
        } else {
           
        $datos['userLogueado'] = $_SESSION['user'];
        $datos['logueado'] = true;
        
            return view ('index',compact('datos'));
        
    }
    }
    /**
     * Show the login page.
     */
    public function loginView()
    {
        //$datos['userLogueado'] = $_SESSION['user'];
     
     return view('login',compact('datos'));
    }
    
    
    /* Show the login page.*/
    
    public function presupuesto()
    {
        $todosEventos=$this->model->getEventos();
         $datos["diaHoy"] = date("Y-m-d");
         if(empty($_SESSION)){
        
            return view('presupuesto',compact('todosEventos','datos'));
        } else {
         $datos["userLogueado"]=$_SESSION['user'];
        $datos['logueado'] = true;
        
        return view('presupuesto',compact('todosEventos','datos'));
    }
}
    
    /* Show the login page.*/
    
    public function galeria()
    {
        $imagenes=$this->model->getImagenes();
        if(empty($_SESSION)){
        
            return view('galeria',compact('imagenes'));
        } else {
            $datos["userLogueado"]=$_SESSION['user'];
            $datos['logueado'] = true;
        return view('galeria',compact('imagenes','datos'));
    }
}
    public function admingaleria()
    {
      
        if(empty($_SESSION)){
        
            return view('adminGaleria',compact('imagenes'));
        } else {
      $imagenes=$this->model->getImagenes();
      $datos["userLogueado"] = $_SESSION['user'];
      $datos['logueado'] = true;
      return view('adminGaleria',compact('imagenes','datos'));
    }
}
        
     
    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        if(empty($_SESSION)){
        
            return view('contact');
        } else {
    
      $datos["userLogueado"] = $_SESSION['user'];
      $datos['logueado'] = true;
      return view('contact',compact('datos'));
    }
       
    }
  public function cerrarSesion(){
        session_unset();
        session_destroy();
        redirect('');
    }
public function vistaRegister(){
     
    return view('register');
}
    
    
public function  vistaAdmin(){
    $todosPresupuestos=$this->model->getPresupuestos();
   $datos["userLogueado"] = $_SESSION['user'];
  $datos['logueado'] = true;
  
    return view ('solicitudes',compact('todosPresupuestos','datos'));
}
public function validarImagenes(){
   /* if (!isset($_POST["imagen"])) {
           echo "entro acaaaaaaaaa";
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
       
        if (in_array($_FILES['imagen']['type'], $permitidos))  {
         
            $imagen_temporal = $_FILES['imagen']['tmp_name'];
          
            $tipo = $_FILES['imagen']['type'];
   
            $fp = fopen($imagen_temporal, 'r+b');
            $data = fread($fp, filesize($imagen_temporal));
            fclose($fp);
            $datos=base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
            $turno = array(
       
                'imagen' => $datos
                //'tipo'=>$tipo
            );
          var_dump($turno);
            echo "entrooooossssssssssssssss";
            $this->model->insert($turno);
          
       
        } else {
            $controles["typeError"] = "La imagen no es del tipo  o excede el tamaño permitido";
        }
   
       
    } else {
        $controles["imageError"] = "Ocurrió un error al cargar la imagen";
    }
    /*if (empty($controles)) {
        $turnos = $this->model->get();
        $contador = 1;
        if (!sizeof($turnos) == 0) {
            $contador = end($turnos)->id + 1;
        }*/
      
        /*

    


    
    return view('adminGaleria');
*/
$tot = count($_FILES["imagen"]["name"]); 
//este for recorre el arreglo 
for ($i = 0; $i < $tot; $i++){ 

$nombre_img=$_FILES['imagen']['name'][$i];
$tipo=$_FILES['imagen']['type'][$i];
$tamanio=$_FILES['imagen']['size'][$i];

if ($nombre_img == !NULL){
     //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"][$i] == "image/gif")
   || ($_FILES["imagen"]["type"][$i] == "image/jpeg")
   || ($_FILES["imagen"]["type"][$i] == "image/jpg")
   || ($_FILES["imagen"]["type"][$i] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/app/views/imagenes/galeria/';
      $ruta='/app/views/imagenes/galeria/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'][$i],$directorio.$nombre_img);
    //guardo en base de datos
    $this->model->guardarimg($ruta.$nombre_img);
    
    }else
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
}else
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
}
}
$imagenes=$this->model->getImagenes();
$datos["userLogueado"] = $_SESSION['user'];
return view('adminGaleria',compact('imagenes','datos'));
}
public function eliminarImagenes(){
    $ruta='/app/views/imagenes/galeria/';
   echo "entro";
  
    $tot = count($_FILES["imagenes"]["name"]); 
    //este for recorre el arreglo 
    for ($i = 0; $i < $tot; $i++){ 
    
    $nombre_img=$_FILES['imagenes']['name'][$i];
    unlink($ruta.$nombre_img);
}
}
}



