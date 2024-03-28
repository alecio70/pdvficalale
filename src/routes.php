<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');


$router->post('/cargos/{id}/editar', 'CargoController@editar');
$router->get('/cargos/{id}/excluir', 'CargoController@deletar');
$router->get('/cargos/visualizacao', 'CargoController@viwer');
$router->get('/cargos', 'CargoController@index');
$router->post('/cargos', 'CargoController@add');

$router->get('/pesquisa', 'PesquisaController@index');