<?php
    if($_POST){

        //VARIALBES
        $numero = $_POST["txtNumero"];

        //IMPRESIONES EN PANTALLA
        echo"Tabla de multiplicar";
        echo"<br/> Numero teclado: ", $numero;

        for($index = 0; $index < 13 ; $index++){
            $mult = $numero * $index;
            echo "<br/> ", $numero, "*", $index, " = ", $mult;
        }


    }