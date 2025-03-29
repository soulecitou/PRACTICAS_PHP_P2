<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 23</title>
</head>
<body>
    <center>
        <section>
            <h1>Números múltiplos de 3 y 5</h1>
            <form action="" method="POST">
                <label for="n">Ingresa un número:</label>
                <input type="number" id="n" name="n">
                <button type="submit">VERIFICAR</button>
            </form>

            <?php
            // Comprueba si el formulario fue enviado usando el método POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Asigna el valor del campo 'n' del formulario a la variable $n
                $n = $_POST['n'];

                // Comprueba si el número es múltiplo de 3
                if ($n % 3 == 0) {
                    // Si es múltiplo de 3, imprime que sí es múltiplo de 3 y 5
                    echo "$n <b>SI</b> es múltiplo de 3 y 5";
                } else if ($n % 5 == 0) {
                    // Si es múltiplo de 5, imprime que sí es múltiplo de 3 y 5
                    echo "$n <b>SI</b> es múltiplo de 3 y 5";
                } else {
                    // Si no es múltiplo de 3 ni de 5, imprime que no es múltiplo de 3 y 5
                    echo "$n <b>NO</b> es múltiplo de 3 y 5";
                }
            }
            ?>
            <br><br>
            <br><br>
            <footer>Sol Reséndiz</footer><br><br>
            <!--Link que te dirige a la siguiente página-->
            <a href="practica24.php">Siguiente práctica</a>
        </section>
    </center>
</body>
</html>
