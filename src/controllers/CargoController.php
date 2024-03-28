<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\CargoHandler;

class CargoController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UserHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $page = intval(filter_input(INPUT_GET, 'page'));

        $cargo = CargoHandler::getCargo($page);
        
        $tableCab = ['ID', 'Cargos', 'Ações'];
        $cadastro = 'Novo Cargos';

        $this->render('cargo', [
            'flash' => $flash,
            'cargo' => $cargo,
            'cadastro' => $cadastro,
            'tableCab' => $tableCab
        ]);

        //$this->redirect('/cargos');
    }

    public function add() {
        $cargo = filter_input(INPUT_POST, 'cargo');

        if ($cargo) {
            if (CargoHandler::cargoExists($cargo) === false) {
                $token = CargoHandler::addCargo($cargo);

                echo json_encode($token);
                $this->redirect('/cargos');

            } else {
                $_SESSION['flash'] = 'Cargo já existe';
                $this->redirect('/cargos');

            }
        } else {
            $this->redirect('/cargos');

        }
    }

    public function viwer() {
        header('Content-Type: application/json');

        $id = filter_input(INPUT_GET, 'id');

        if($id) {
            $cargoId = CargoHandler::getCargoId($id);

            if($cargoId) {
                echo json_encode($cargoId);
            } else {
                echo json_encode(array('error' => 'Cargo não encontrado'));
            }
        } else {
            echo json_encode(array('error' => 'ID do cargo não fornecido'));
        }
    }

    public function editar($args) {
        $cargo = filter_input(INPUT_POST, 'cargo');

        if ($cargo) {
            if (CargoHandler::cargoExists($cargo) === false) {
                $token = CargoHandler::editarCargo($cargo, $args);

                echo json_encode($token);
                $this->redirect('/cargos');

            } else {
                $_SESSION['flash'] = 'Cargo já existe';
                $this->redirect('/cargos');

            }
        } else {
            $this->redirect('/cargos');

        }
    }

    public function deletar($args) {
        $token = CargoHandler::del($args['id']);

        echo json_encode($token);
        $this->redirect('/cargos');
    }

    
}