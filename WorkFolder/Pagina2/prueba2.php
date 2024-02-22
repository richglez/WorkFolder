<?php
    if ($_GET) { //post en la informacion que estas mandando
        # code...
        $nombre = $_GET['txtUsername'];  //crear variable
        echo "Nombre de usuario: ", $nombre,"";  //mandar la variable 
    }


    //GET -> obtener en la URL   POST -> obtener
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario PHP</title>
</head>

<!-- http://localhost/WorkFolder/Pagina2/prueba2.php -->

<body>

    <form action="prueba2.php" method="get"> <!-- metodo post para enviar formularios !-->
    <h1>Hola, Bienvenido</h1>
        <ul>
            <li>
                <label for="txtUsername">Username</label>
                <input type="text" name="txtUsername" id="username">
                <br>
                <input type="submit" name="btnEnvio" id="btnEnvio">
            </li>
        </ul>
    </form>
</body>
</html>


