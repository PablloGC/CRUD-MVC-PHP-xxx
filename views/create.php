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
    <form action="store.php" method="post">
        <h1>New Customer</h1>

        <!-- Flexbox -->
        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">companyName</label>
                <input type="text" class="form-control">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">contactName</label>
                <input type="text" class="form-control">
            </div>
        </div>

         <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">contactTitle</label>
                <input type="text" class="form-control">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">address</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">city</label>
                <input type="text" class="form-control">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">postalCode</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 flex-fill">
                <label for="" class="form-label">country</label>
                <input type="text" class="form-control">
            </div>
            <div class="p-2 flex-fill">
                <label for="" class="form-label">phone</label>
                <input type="text" class="form-control">
            </div>
        </div>

    
</body>
</html>