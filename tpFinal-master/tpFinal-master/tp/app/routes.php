 <?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');
    $router->get('login', 'PagesController@loginView');
    $router->get('presupuesto', 'PagesController@presupuesto');
    $router->get('galeria', 'PagesController@galeria');
    $router->get('adminGaleria', 'PagesController@admingaleria');
        $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');

    $router->get('tasks', 'TasksController@index');
    $router->get('tasks/create', 'TasksController@create');
    $router->post('tasks/save', 'TasksController@save');

    $router->get('not_found', 'ProjectController@notFound');
    $router->get('internal_error', 'ProjectController@internalError');


//rutas de registro

$router->get('register', 'PagesController@vistaRegister');
  $router->post('usuarios/validarUsuario','UsersController@validarUsuario');
$router->get('cerrarSesion', 'PagesController@cerrarSesion');
$router->post('Login/validar', 'loginController@validarLogin');

$router->get('solicitudes', 'PagesController@vistaAdmin');


//rutas presupuestos

$router->post('presupuesto/validarPresupuesto','PresupuestoController@validarPresupuesto');
$router->get('presupuesto/modificar', 'PresupuestoController@updateEstado');



//rutas de galeria
$router->post('imagen/validar','PagesController@validarImagenes');
$router->post('eliminar/imagen','PagesController@eliminarImagenes');

