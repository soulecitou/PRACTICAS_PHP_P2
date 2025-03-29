<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 29</title>
</head>
<body>
    <center>
        <h1><mark>NÚMERO ENTERO</mark></h1>
        <form action="" METHOD="POST">
            <label for="numero">Ingrese un número entero:</label>
            <input type="number" id="numero" name="numero" required><br><br>
            <button type="submit">ENVIAR</button>
        </form>

        <?php
        // Comprueba si el formulario fue enviado usando el método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Asigna el valor del campo 'numero' del formulario a la variable $numero
            $numero = $_POST['numero'];

            // Comprueba si el número es mayor que 0 (positivo)
            if ($numero > 0) {
                // Si es positivo, calcula el doble del número y lo imprime
                echo "El <b> doble </b>del número es: " . ($numero * 2) . "<br>";
            } else if ($numero < 0) {
                // Si es negativo, calcula el triple del número y lo imprime
                echo "El <b>triple</b> del número es: " . ($numero * 3) . "<br>";
            } else {
                // Si es 0 (neutro), imprime que el resultado es 0
                echo "El número es <b>neutro</b>, por lo que el resultado es: 0 <br>";
            }
        }
        ?>
        <br><br><footer>Sol Reséndiz</footer> <br><br>
      <!--Link que te dirige a la siguiente página-->
        <a href="practica30.php">Siguiente práctica</a>
    </center>
</body>
</html>
