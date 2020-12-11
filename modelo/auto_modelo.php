<?php
require_once 'config/database.php';

class Auto extends DatabaseConnection{

    public function get_autos(){
        $conectar = parent::conexion();
        parent::set_name();

        $sql = "SELECT *  FROM auto ORDER BY id ASC;";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }



}


?>