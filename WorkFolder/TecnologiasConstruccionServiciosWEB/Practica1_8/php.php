<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['txtNum1'];
        $num2 = $_POST['txtNum2'];
        if (is_numeric($num1) && is_numeric($num2)) {
            echo 'Ambas entradas son números<br>';
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 2 == 0) {
                    echo $i . ' par<br>';
                } else {
                    echo $i . ' non<br>';
                }
            }
        } 
        else {
            echo 'ERROR: Al menos una de las entradas no es un número';
            // header("Location: index.html"); // Redirige al usuario a index.html
            exit(); // Es importante terminar el script después de la redirección para evitar que se ejecuten más instrucciones
        }
}





