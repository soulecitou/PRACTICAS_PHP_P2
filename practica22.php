<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 22</title>
</head>
<body>   <center>    <section>
        <H1>¿Es vocal?</H1>
        <form action="" method="POST">
            <label for="letra">Ingresa un caracter:</label>
            <input type="text" id="letra" name="letra"><br><br>
            <button type="submit">CALCULAR</button><br><br>
        </form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $letra=$_POST['letra'];

    if ($letra == 'a'|| $letra == 'A'){
        echo"La letra $letra ingresada en vocal";

} else if ($letra == 'e'   || $letra == 'E'){
    echo "La letra $letra ingresada en vocal";

} else if ($letra == 'i' || $letra =='I'){
    echo "La letra $letra ingresada en vocal";

} else if ($letra == 'o' || $letra =='O'){
    echo "La letra $letra ingresada es vocal";

} else if ($letra =='u' || $letra == 'U'){
    echo "La letra $letra ingresada es vocal";

} else {
    echo "La letra $letra ingresada  es <b>NO</b> vocal";
}   }
?>
<br><br><footer>Sol Reséndiz</footer><br><br>
<a href="practica23.php">Siguiente práctica</a>
</section>
    </center>
</body>
</html>