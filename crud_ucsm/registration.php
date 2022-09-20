<?php
    include("session.php");
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <a href="home.php">Inicio</a>
        <a href="users.php">Usuarios</a>
        <a href="registration.php">Registro de Usuarios</a>
        <a href="logout.php">Cerrar Sesion</a>
        <h2>REGISTRARSE</h2>
        <form action="register.php" method="POST">
            <input type="text" placeholder="Nombre" name="firstname" required>
            <input type="text" placeholder="Segundo Nombre" name="middlename" required>
            <input type="text" placeholder="Apellido" name="lastname" required>
            <input type="date" name="birthdate" required>
            <input type="text" placeholder="Usuario" name="username" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <button type="subtmit">Registrarse</button>
        </form>     
    </body>
</html>