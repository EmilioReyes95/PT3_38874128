<?php
namespace Config;
$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
/*$routes->get('registro', 'Home::registro');*/
$routes->get('login', 'Home::login');
$routes->get('clientes', 'Home::clientes');
$routes->get('edit', 'Home::edit');




/*rutas de Registro de usuario*/
$routes->get('registro', 'usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');

/*Rutas Lista Clientes*/

/*$routes->get('clientes','usuario_controller::clientes');*/

/*Rutas del login */
$routes->get('login', 'login_controller');
$routes->post('enviarlogin','login_controller::auth');
$routes->get('panel','Panel_controller::index',['filter' => 'auth']);
$routes->get('logout','login_controller::logout');


