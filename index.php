<?php
include('connection.php');

$con =connection();

$sql="SELECT * FROM users";

$query =mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Usuarios CRUD</title>
</head>

<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1> REGISTRA TUS DATOS</h1>

            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="direccion" placeholder="Direccion">
            <input type="text" name="celular" placeholder="Celular">
            <input type="text" name="email" placeholder="Email">

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="users-table">
        <h2> Usuarios Registrados </h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['lastname'] ?> </th>
                    <th> <?= $row['direccion'] ?> </th>
                    <th> <?= $row['celular'] ?> </th>
                    <th> <?= $row['email'] ?> </th>

                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit" >Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete"> Eliminar</a></th>
                </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
</body>

</html>