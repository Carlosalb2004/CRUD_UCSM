<?php
    include("config.php");
    include("session.php");

    $id = $_GET['id'];

    $sql="DELETE FROM users WHERE username='$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        echo 'alert("Usuario eliminado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Usuario no eliminado");';
        echo 'window.location="registration.php";';
        echo '</script>';
    }
?>