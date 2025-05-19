<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>.: Index :.</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../boostrap/js/bootstrap.min.js"></script>
</head>
<body>
    
    <?php
        require_once '../controllers/customer.php';

        $customerController = new CustomerController();

        $customers = $customerController->index();


        //var_dump($customers);
        //phpinfo();
    ?>

</body>
</html>