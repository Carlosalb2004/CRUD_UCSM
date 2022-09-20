<?php
    include("session.php");
    $query="SELECT * FROM users";
    $result=filterRecords($query);

    function filterRecords($query){
        include("config.php");
        $filter_result=mysqli_query($mysqli, $query);
        return $filter_result;
    }
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
        <h2>USUARIOS</h2>
        <form action="" method="POST">
            <input type="search" name="valueToSearch" placeholder="Busqueda">
            <button type="submit" name="search">Buscar</button>
        </form>
        <?php
            echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['middlename']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['birthday']."</td>";
                echo "<td><a href='edit.php?id=".$row['username']."'>Editar</a></td>";
                echo "<td><a href='delete.php?id=".$row['username']."'>Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>