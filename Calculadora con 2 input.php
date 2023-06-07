<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

h1 {
    text-align: center;
}

form {
    width: 300px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 50px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"], select {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;

}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
 
    </style>
</head>
<body>
<h1>Ponga 2 numeros</h1>
<h5>Dato: el primer numero siempre sera el dividendo y el segundo el divisor. <br>
Para el caso de raiz, poner en el primer numero el numero a operar y en el segundo poner un 0.
</h5>
    <form action="" method="post">
        <input type="text" name="numero1" placeholder="Número 1" required>
        <input type="text" name="numero2" placeholder="Número 2" required>
        <select name="operador">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="potencia">Potencia</option>
            <option value="raiz">Raiz</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <h1>Resultado</h1>
    <?php
    /**
     * *La funcion isset, se utiliza para verificar si una variable esta definida y si tiene un valor asignado
     */
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operador'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operador = $_POST['operador'];

        $resultado = 0;
        switch ($operador) {
            case 'sumar':
                $resultado = $numero1 + $numero2;
                break;
            case 'restar':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicar':
                $resultado = $numero1 * $numero2;
                break;
            case 'dividir':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    echo "Error: No se puede dividir entre cero.";
                    exit;
                }
                break;
            case 'potencia':
                $resultado = pow($numero1, $numero2);
                break;
            case 'raiz':
                $resultado = sqrt($numero1);
                break;
            default:
                echo "Error: Operador inválido.";
                exit;
        }

        echo "El resultado es: " . $resultado;
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
    ?>

</body>
</html>
 