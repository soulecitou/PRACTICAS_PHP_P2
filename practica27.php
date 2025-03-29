<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 27</title>
</head>
<body>
    <center>
        <header><h1> <mark>Ecuaciones de primer grado</mark></h1></header>

        <main>
            <section>
                <form action="" method="POST">
                    <label for="a">Ingrese el valor A:</label>
                    <input type="number" id="a" name="a"> <br><br>
                    <label for="b">Ingrese el valor B:</label>
                    <input type="number" id="b" name="b"> <br><br>
                    <button type="submit">REALIZAR ECUACIÓN</button> <br><br>
                </form>

                <?php
                // Comprueba si el formulario fue enviado usando el método POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Asigna los valores de los campos 'a' y 'b' del formulario a las variables $a y $b
                    $a = $_POST['a'];
                    $b = $_POST['b'];

                    // Comprueba si el valor de 'a' es 0 (no es una ecuación de primer grado)
                    if ($a == 0) {
                        // Si 'a' es 0, imprime un mensaje indicando que no es una ecuación de primer grado
                        echo "<b>No es una ecuación de primer grado. </b>";
                    } else {
                        // Si 'a' no es 0, calcula el valor de 'x' usando la fórmula x = -b / a
                        $x = -$b / $a;
                        // Imprime el valor de 'x'
                        echo "El valor de x es: " . $x;
                    }
                }
                ?>

            </section>
        </main>

        <br><br><footer>Sol Reséndiz</footer><br><br>
        <!--Link que te dirige a la siguiente página-->
        <a href="practica28.php">Siguiente práctica</a>
    </center>
</body>
</html>
