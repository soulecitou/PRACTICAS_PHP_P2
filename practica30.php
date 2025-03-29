<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 30</title>
</head>
<body>
    <center>
        <h1><mark>NOTAS</mark></h1>
        <form action="" method="POST">
            <label for="Nota1">Nota 1:</label>
            <input type="number" id="Nota1" name="Nota1" required><br><br>
            <label for="Nota2">Nota 2:</label>
            <input type="number" id="Nota2" name="Nota2" required><br><br>
            <label for="Nota3">Nota 3:</label>
            <input type="number" id="Nota3" name="Nota3" required><br><br>
            <label for="Nota4">Nota 4:</label>
            <input type="number" id="Nota4" name="Nota4" required><br><br>
            <button type="submit">CALCULAR</button><br><br>
        </form>
        <?php
        // Comprueba si el formulario fue enviado usando el método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Comprueba si todas las notas fueron enviadas
            if (isset($_POST['Nota1'], $_POST['Nota2'], $_POST['Nota3'], $_POST['Nota4'])) {
                // Asigna los valores de las notas a variables PHP
                $nota1 = $_POST['Nota1'];
                $nota2 = $_POST['Nota2'];
                $nota3 = $_POST['Nota3'];
                $nota4 = $_POST['Nota4'];

                // Crea un array con las notas
                $notas = array($nota1, $nota2, $nota3, $nota4);

                // Ordena el array de notas en orden descendente (de mayor a menor)
                rsort($notas);

                // Calcula el promedio de las 3 mejores notas
                $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

                // Imprime el promedio con dos decimales
                echo "El promedio de las 3 mejores notas es: " . number_format($promedio, 2) . "<br>";

                // Comprueba si el promedio es mayor o igual a 11 (aprobado)
                if ($promedio >= 11) {
                    // Si el promedio es mayor o igual a 11, imprime "APROBADO"
                    echo "<b>APROBADO</b>";
                } else {
                    // Si el promedio es menor a 11, imprime "REPROBADO"
                    echo "<b>REPROBADO</b>";
                }
            }
        }
        ?>
        <br><br><footer>Sol Reséndiz</footer> <br><br>
    </center>
</body>
</html>
