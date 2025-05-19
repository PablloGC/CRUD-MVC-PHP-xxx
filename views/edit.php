<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Create :.</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../boostrap/js/bootstrap.min.js"></script>    
</head>
<body>
    <form action="update.php" method="post">
        <h1>New Customer</h1>

        <input type="text" value=<?php echo $_GET['id'];?> name="custId" hidden>

        <!-- Flexbox -->
        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">companyName</label>
                <input type="text" class="form-control"name="companyName">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">contactName</label>
                <input type="text" class="form-control"name="contactName">
            </div>
        </div>

         <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">contactTitle</label>
                <input type="text" class="form-control"name="contactTitle">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">address</label>
                <input type="text" class="form-control"name="address">
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">city</label>
                <input type="text" class="form-control"name="city">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">postalCode</label>
                <input type="text" class="form-control"name="postalCode">
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">country</label>
                <input type="text" class="form-control"name="country">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">phone</label>
                <input type="text" class="form-control"name="phone">
            </div>
        </div>

        <input type="submit" class="btn btn-primary">

    
</body>
</html>