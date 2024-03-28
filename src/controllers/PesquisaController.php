<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\CargoHandler;

class PesquisaController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index() {
            header('Content-Type: application/json');

            $termPesquisa = filter_input(INPUT_GET, 's');

            if ($termPesquisa) {
                $resultados = CargoHandler::searchCargos($termPesquisa);
                if(!empty($resultados)) {
                
                    echo json_encode($resultados);
                } else {
                    echo json_encode(['erro' => 'Cargo não encontrado']);
                }
            } else {
                echo json_encode(['erro' => 'Cargo não definido']);
            }

            

            
    }

}