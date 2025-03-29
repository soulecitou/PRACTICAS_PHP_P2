<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 26</title>
</head>
<body>
    <center>
        <header><h1><mark>Números en orden ascendente</mark></h1></header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="num1">Número 1</label>
                    <input type="number" id="num1" name="num1"> <br><br>
                    <label for="num2">Número 2</label>
                    <input type="number" id="num2" name="num2"><br><br>
                    <label for="num3">Número 3</label>
                    <input type="number" id="num3" name="num3"><br><br>
                    <button type="submit">ENVIAR</button><br><br>
                </form>

                <?php
                // Comprueba si el formulario fue enviado usando el método POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Asigna los valores de los campos del formulario a variables PHP
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];

                    // Determina el número mayor
                    if ($num1 > $num2 && $num1 > $num3) {
                        $mayor = $num1;
                    } else if ($num2 > $num1 && $num2 > $num3) {
                        $mayor = $num2;
                    } else {
                        $mayor = $num3;
                    }
                    // Imprime el número mayor
                    echo "El número mayor es: " . $mayor . "<br>";

                    // Determina el número menor
                    if ($num1 <= $num2 && $num1 <= $num3) {
                        $menor = $num1;
                    } else if ($num2 <= $num1 && $num2 <= $num3) {
                        $menor = $num2;
                    } else {
                        $menor = $num3;
                    }
                    // Imprime el número menor
                    echo "El número menor es: " . $menor . "<br>";

                    // Calcula el número intermedio
                    $suma = $num1 + $num2 + $num3;
                    $intermedio = $suma - $mayor - $menor;

                    // Imprime el número intermedio
                    echo "El número intermedio es: " . $intermedio;
                }
                ?>

            </section>
        </main>
        <footer><p>Sol Reséndiz</p></footer>
        <!--Link que te dirige a la siguiente página-->
        <a href="practica27.php">Siguiente práctica</a>
    </center>
</body>
</html>
