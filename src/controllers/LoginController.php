<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class LoginController extends Controller {

    public function signin() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }

        $this->render('signin', [
            'flash' => $flash
        ]);
    }

    public function signinAction() {
        $usuario = filter_input(INPUT_POST, 'usuairo');
        $senha = filter_input(INPUT_POST, 'senha');

        if ($usuario && $senha) {
            $token = UserHandler::verificarLogin($usuario, $senha);

            if ($token) {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            } else {
                $_SESSION['flash'] = 'Email e/ou Senha Incorreto!';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Digite o campo de Email e/ou Senha';
            $this->redirect('/login');
        }
    }

}