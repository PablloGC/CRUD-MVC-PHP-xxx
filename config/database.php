<?php

class Database {
    private $host = "localhost";
    private $db = "northwind";
    private $port = "3306";
    private $user = "root";
    private $password = "";
    private $conexion = "";

    public function conectar() {

        try {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db;port=$this->port", $this->user, $this->password);

        } catch (PDOException $e) {
            echo $e->getMessage();

        }

        return $this->conexion;
    }

        
}

?>