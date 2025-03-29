<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 25</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>DOBLE/TRIPLE</mark></h1>
        </header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="n">Ingresa un número:</label>
                    <input type="number" name="n" id="n">
                    <button type="submit">Calcular</button>
                </form>
                
                <?php
                // Comprueba si el formulario fue enviado usando el método POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Asigna el valor del campo 'n' del formulario a la variable $numero
                    $numero = $_POST['n'];

                    // Comprueba si el número es impar (el resto de la división entre 2 no es 0)
                    if ($numero % 2 != 0) {
                        // Si es impar, calcula el doble del número y guarda el mensaje
                        $mensaje = "El doble de " . $numero . " es " . ($numero * 2);
                    } else {
                        // Si es par, calcula el triple del número y guarda el mensaje
                        $mensaje = "El triple de " . $numero . " es " . ($numero * 3);
                    }
                    // Imprime el mensaje con el resultado
                    echo $mensaje;
                }
                ?>
                <br><br>
            </section>
        </main>
        <br><br><footer>Sol Reséndiz</footer><br><br>
        <!--Link que te dirige a la siguiente página-->
        <a href="practica26.php">Siguiente práctica</a>
    </center>
</body>
</html>
