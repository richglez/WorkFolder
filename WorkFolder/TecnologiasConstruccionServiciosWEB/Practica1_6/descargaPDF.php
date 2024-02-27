<?php
// Verificar si se ha proporcionado un nombre en la URL
if(isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "¡Bienvenido, $nombre!";
} else {
    echo "¡Bienvenido!";
}
?>
