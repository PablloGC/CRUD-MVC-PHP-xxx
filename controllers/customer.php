<?php

require_once '../models/customer.php';

class CustomerController {
    private $userModel;

    public function __construct(){
        $this->userModel = new CustomerModel();
    }

    public function index(){
        $customers = $this->userModel->index();

        include '../views/index.php';
    }

    public function store($data){
        $this->userModel->store($data);
        header("Location: ../public/index.php");
    }

    public function update($data){
        $this->userModel->update($data);
        header("Location: ../public/index.php");
    }

    public function delete($id){
        $this->userModel->delete($id);
        header("Location: ../public/index.php");
    }
}

?>