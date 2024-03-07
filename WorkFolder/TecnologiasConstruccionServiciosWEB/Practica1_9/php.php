<?php
function es_primo($numero) {
    if ($numero < 2) { //verificar si es menor a dos
        return false; //false porque los números menores que 2 no son primos.
    }//false no regreses nada al usuario
    for ($i = 2; $i <= sqrt($numero); $i++) {  //los numeros primos empiezan con 2
        if ($numero % $i == 0) {  //En cada iteración, verifica si $numero es divisible por $i usando el operador %
            return false;  //. Si es divisible, significa que $numero no es primo, así que devuelve false.
        }  //false no regreses nada al usuario
    }
    return true; //regresa los que si son primos
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {  //si el server request metodo es post
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];

    if (is_numeric($num1) && is_numeric($num2)) {
        echo "Ambas entradas son números<br>";
        
        for ($i = $num1; $i <= $num2; $i++) {
            if (es_primo($i)) {
                echo $i . " primo<br>";
            }
        }
    } else {
        echo "ERROR: Ambas entradas no son numéricas";
    }
}

