<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Customer :.</title>
    <script>
        
        </script>
</head>
<body>
    <h1>Customers</h1>
    <a href="../views/create.php">New Customer</a>

    <table class="table table-bordered">
        <tr>
            <td>custId</td>
            <td>companyName</td>
            <td>contactName</td>
            <td>action</td>

        </tr>

    <?php foreach($customers as $customer): ?>
        <tr>
            <td><?= $customer['custId']?></td>
            <td><?= $customer['companyName']?></td>
            <td><?= $customer['contactName']?></td>
            <td>
                <a href="../views/edit.php?id=<?= $customer['custId']?>">Editar</a>
                <a href="javascript:confirm('¿Deseas eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </table>
    
</body>
</html>