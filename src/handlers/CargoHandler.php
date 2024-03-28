<?php
namespace src\handlers;

use \src\models\Cargo;

class CargoHandler {
    public static function cargoIdExists($id) {
        $nId = Cargo::select()->where('id', $id)->one();

        return $nId ? true : false;
    }
    public static function cargoExists($cargo) {
        $nomeCargo = Cargo::select()->where('cargo', $cargo)->one();

        return $nomeCargo ? true : false;
    }

    public static function addCargo($cargo) {
        Cargo::insert([
            'cargo' => $cargo
        ])->execute();
    }

    public static function editarCargo($cargo, $id) {
        Cargo::update()
            ->set('cargo', $cargo)
            ->where('id', $id)
        ->execute();
    }

    public static function getCargo($page) {
        $serPage = 5;

        $cargo = Cargo::select()
            ->orderBy('cargo', 'asc')
            ->page($page, $serPage)
        ->get();

        $total = Cargo::select()->count();
        $pageCount = ceil($total / $serPage);

        $pageAnterior = $page--;
        $pageProximo = $page++; 

        

        return [
            'cargo' => $cargo,
            'pageCount' => $pageCount,
            'currentPage' => $page,
            'pageAnterior' => $pageAnterior,
            'pageProximo' => $pageProximo
        ];
    }

    public static function getCargoId($id) {
        $data = Cargo::select()->where('id', $id)->one();

        if ($data) {
            $cargo = new Cargo();
            $cargo->id = $data['id'];
            $cargo->cargo = $data['cargo'];

            return $cargo;
        }

        return false;
    }

    public static function del($id) {
        Cargo::delete()->where('id', $id)->execute();
    }

    public static function searchCargos($term) {
        $cargos = [];
    
        $data = Cargo::select()->where('cargo', 'like', '%'.$term.'%')->get();
        if ($data) {
            foreach ($data as $cargo) {
                $newCargo = new Cargo();
                $newCargo->id = $cargo['id'];
                $newCargo->cargo = $cargo['cargo'];
    
                $cargos[] = $newCargo;
            }
        }
    
        return $cargos;
    }
}