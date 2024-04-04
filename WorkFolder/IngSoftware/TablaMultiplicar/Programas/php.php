<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        for ($i = 12; $i >= 1; $i--) {
            $result = $number * $i;
            echo "<p>{$number} * {$i} = {$result}</p>";
        }
    }
