<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 24</title>
</head>
<body>
    <center>
        <header><h1> <mark>¿PAR O IMPAR?</mark></h1></header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="num">Ingresa un número</label>
                    <input type="number" id="num" name="num"><br><br>
                    <button type="submit">VERIFICAR</button><br><br>
                </form>

                <?php
                // Comprueba si el formulario fue enviado usando el método POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Asigna el valor del campo 'num' del formulario a la variable $num
                    $num = $_POST['num'];

                    // Comprueba si el número es par (el resto de la división entre 2 es 0)
                    if ($num % 2 == 0) {
                        // Si es par, imprime que el número es par
                        echo "El número $num es PAR";
                    } else {
                        // Si no es par, imprime que el número es impar
                        echo "El número $num es IMPAR";
                    }
                }
                ?>

            </section>
        </main>
        <!--Link que te dirige a la siguiente página-->
        
        <br><br> <a href="practica25.php">Siguiente práctica</a><br><br>
        <footer>Sol Reséndiz</footer>
    </center>
</body>
</html>
