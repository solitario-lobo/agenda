<?php
class DatabaseConnection{
    protected $db;
    protected function conexion(){
        try {
            //code...
            $conectar = $this->db = new PDO(
                "mysql:host=bd84erllwr8kub2wgdvq-mysql.services.clever-cloud.com; dbname=bd84erllwr8kub2wgdvq","uaercfby2p1zl9r1",
                "4Xtxxoti9ky2JBN1GqFp" );
            return $conectar;
        } catch (Exception $exc) {
            //throw $th;
            print("Error".$exc->getMessage()."</br>");
            die();
        }
    }

    public function set_name(){
        return $this->db->query("SET NAMES 'utf8'; ");
    }

    public function ruta(){
        return "http://localhost/htdocs/agencia";
    }

}

?>