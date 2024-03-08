<?php
namespace src\handlers;

use \src\models\Usuario;

class UserHandler {
    public static function checkLogin() {
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = Usuario::select()->where('token', $token)->one();
            if($data) {
                $loggedUser =  new Usuario();
                $loggedUser->id = $data['id'];
                $loggedUser->avatar = $data['avatar'];

                return $loggedUser;
            }
        }

        return false;
    }

    public static function verificarLogin($usuario, $senha) {
        $user = Usuario::select()->where('usuario', $usuario)->one();
        $password = Usuario::select()->where('senha', $senha)->one();

        if($user && $password) {
            
                $token = md5(time().rand(0,999).time());

                Usuario::update()
                    ->set('token', $token)
                    ->where('usuario', $usuario)
                ->execute();

                return $token;
        }

        return false;
    }
}