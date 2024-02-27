<?php
    if ($_GET) {
        # code...
        $bienvenida = 'Bienvenido';
        $nombre = $_GET["txtNombre"];
        $apellido = $_GET["txtApellido"];

        echo $bienvenida;
        echo "<br><br>"; 
        echo "Nombre: ", $nombre;  //impresion en pantalla
        echo "<br>";
        echo "Apellido: ", $apellido;
    }
?>