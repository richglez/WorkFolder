<?php

// http://localhost/WorkFolder/Pagina5/php.php

if($_POST){
    $ValA = $_POST["txtValA"];
    $ValB = $_POST["txtValB"];

    $suma = $ValA + $ValB;
    $resta = $ValA - $ValB;
    $div = $ValA / $ValB;
    $multi = $ValA * $ValB;

    echo "<br> Suma: ", $suma;
    echo "<br> Resta: ", $resta;
    echo "<br> Multiplicacion: ", $multi;
    echo "<br> Division: ", $div;
    
}

?>