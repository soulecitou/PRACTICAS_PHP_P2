<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 28</title>
</head>
<body>
    <center>
        <header><h1><mark>¿Eres mayor o menor?</mark></h1></header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="edad">Ingresa tu edad:</label>
                    <input type="number" id="edad" name="edad"> <br><br>
                    <button type="submit">VERIFICAR</button> <br><br>
                </form>
            </section>
        </main>

        <?php
        // Comprueba si el formulario fue enviado usando el método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Asigna el valor del campo 'edad' del formulario a la variable $edad
            $edad = $_POST['edad'];

            // Comprueba si la edad es menor o igual a 18
            if ($edad <= 18) {
                // Si la edad es menor o igual a 18, imprime que es menor de edad
                echo "Eres <b>menor</b> de edad";
            } else {
                // Si la edad es mayor a 18, imprime que es mayor de edad
                echo "Eres <b>mayor</b> de edad";
            }
        }
        ?>

        <br><br><footer>Sol Reséndiz</footer> <br><br>
        <!--Link que te dirige a la siguiente página-->
        <a href="practica29.php">Siguiente práctica</a>
    </center>
</body>
</html>
