<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $resultado = $num1 * $num2;
    echo "Resultado da multiplicação: $resultado";
}
?>
