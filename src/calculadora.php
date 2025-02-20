<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $resultado = "";

    switch ($operation) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: División por cero.";
            }
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }

    echo "<h2>Resultado: $resultado</h2>";
    echo "<a href='index.html'>Volver</a>";
}
?>
