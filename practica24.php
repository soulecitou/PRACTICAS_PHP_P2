<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA 24</title>
</head>
<body>
    <center>
<section>
    <h1>PAR O IMPAR</h1>
<form action="" method="POST">
    <label for="num">Ingresa un numero:</label>
    <input type="number" id="num" name="num">
    <button type="submit">ENVIAR</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $numero=$_POST['numero'];

    if ($num % 3 == 0){
        echo "$num es multiplo de 3 y 5";    
} else if ($num % 5 ==0) {
    echo "$num es multiplo de 3 y 5";
}else{
    echo "$num  NO es multiplo de 3 y 5";
}
}
?><br><br>
<a href="eje24.php">Siguiente practica -></a>
</section>
</center>
</body>
</html>