<?php

require_once '../config/database.php';

class CustomerModel {
    private $conexion;

    public function __construct(){
        $cn = new Database();
        $this->conexion = $cn->conectar();
    }

    public function index(){
        $query = "SELECT * FROM Customer";
        $stmt = $this->conexion->query($query);

        $stmt->execute();

        $customers = $stmt->FetchAll(PDO::FETCH_ASSOC);

        return $customers;
    }

    public function store($data){
        $query = "INSERT INTO Customer
        (companyName, contactName, contactTitle, address, city, postalCode, country, phone)
        VALUES(?,?,?,?,?,?,?,?)";

        $stmt = $this->conexion->prepare($query);

        $stmt->execute(
            array(
                $data['companyName'], $data['contactName'], $data['contactTitle'], $data['address'],
                $data['city'], $data['postalCode'], $data['country'], $data['phone'], 

            )
        );
    }
}


?>