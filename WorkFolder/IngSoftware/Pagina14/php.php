<?php
    if($_POST){
        //VARIABLES
        $numero1 = $_POST["txtNum1"];
        $numero2 = $_POST["txtNum2"];


        echo"<br/> Numero 1: ", $numero1;
        echo"<br/> Numero 2: ", $numero2, "<br/><br/><br/>";

        if ($numero1 > $numero2) {
            echo "<br/> El numero: ", $numero1,", es mayor que el numero ", $numero2,".";
        }

        else{
            echo "<br/>El numero: ", $numero2,", es mayor que el numero ", $numero1,".";
 
        }




    }
