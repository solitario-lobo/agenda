<?php

class Auto_controlador{

    public function get_autos()
    {
        # code...
        require_once 'modelo/auto_modelo.php';
        $auto = new Auto();
        $autos =$auto->get_autos();
        require_once 'index.php';
    }
}



?>