<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PRÁCTICA 21</title> 
</head>
<body>
<center> <header> <h1><mark>¿Mayor o menor?</mark></h1> </header>
    <main>
        <section> 
            <!--Inicia un formulario que envía datos -->
        <form action="" method="POST"> 
            <label for="num1"> Número 1</label>
            <input type="number" id="num1" name="num1"><br><br> 
            <label for="num2"> Número 2</label> <input type="number" id="num2" name="num2"><br><br> 
            <label for="num3"> Número 3</label> <input type="number" id="num3" name="num3"><br><br>
            <button type ="submit">CALCULA</button><br><br> </form> 

            <?php
            // Comprueba si el formulario fue enviado usando el método POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Asigna los valores de los campos del formulario a variables PHP
                $num1 = $_POST['num1']; // Obtiene el valor del campo 'num1' del formulario
                $num2 = $_POST['num2']; 
                $num3 = $_POST['num3']; 

                // Determina el número mayor usando condicionales PHP
                if ($num1 > $num2 && $num1 > $num3) { // Si num1 es mayor que num2 y num3
                    $mayor = $num1; 
                } else if ($num2 > $num1 && $num2 > $num3) { 
                    $mayor = $num2;
                } else { // Si ninguna de las condiciones anteriores es verdadera
                    $mayor = $num3; // Asigna num3 a la variable mayor
                }

                // Imprime el resultado o sea el número mayor
                echo "El número mayor es $mayor"; 
            }
            ?>
<!--Link que te dirige a la siguiente página-->
            <br><br><br> <a href="practica22.php">Siguiente práctica :)</a>
    </section> 
    </main>
    <!--Pie de página-->
    <footer> <p>Sol Reséndiz</p> </footer>  
</center>
</body>
</html>
