<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM empleados";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear Nuevo Empleado</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="nombre" placeholder="nombre">
            <input type="date" name="fecha" placeholder="fecha">
            <input type="text" name="direccion" placeholder="direccion">
            <input type="text" name="telefono" placeholder="telefono">
            <input type="email" name="correo" placeholder="correo">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Empleados registrados</h2>
        <table>
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Accion</th>
                    <th>Accion</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                       
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['fecha'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>