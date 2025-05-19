<?php

 require_once '../controllers/customer.php';

 $id = $_GET['id'];

 $customerController = new CustomerController();

 $customerController->delete($id);
 
?>