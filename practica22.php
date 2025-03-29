<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 22</title>
</head>
<body>
    <center>
        <section>
            <h1><mark>¿Es vocal?</mark></h1>
            <form action="" method="POST">
                <label for="letra">Ingresa un caracter:</label>
                <input type="text" id="letra" name="letra"><br><br>
                <button type="submit">IDENTIFICAR</button><br><br>
            </form>

            <?php
            // Comprueba si el formulario fue enviado usando el método POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Asigna el valor del campo 'letra' del formulario a la variable $letra
                $letra = $_POST['letra'];

                // Comprueba si la letra ingresada es una vocal (mayúscula o minúscula)
                if ($letra == 'a' || $letra == 'A') {
                    echo "La $letra es vocal";
                } else if ($letra == 'e' || $letra == 'E') {
                    echo "La $letra es vocal";
                } else if ($letra == 'i' || $letra == 'I') {
                    echo "La $letra es vocal";
                } else if ($letra == 'o' || $letra == 'O') {
                    echo "La $letra es vocal";
                } else if ($letra == 'u' || $letra == 'U') {
                    echo "La $letra es vocal";
                } else {
                    // Si no es ninguna de las vocales, imprime que no es vocal
                    echo "La $letra es <b>NO</b> vocal";
                }
            }
            ?>

            <br><br>
            <footer>Sol Reséndiz</footer><br><br>
            <a href="practica23.php">Siguiente práctica</a>
        </section>
    </center>
</body>
</html>
