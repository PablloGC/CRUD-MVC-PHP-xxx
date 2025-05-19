<?php

   require_once '../controllers/customer.php';

   $customerController = new CustomerController();

   $customerController->store($_POST);
   
?>