<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 27</title>
</head>
<body>
    <header><h1>Ecuacion de primer grado</h1></header>
    <main>
<section>
            <form action="" method="POST">
                <label for="a">Ingresa el valor de a:</label><br><br>
                <input type="number" name="a" id="a"><br><br>
                <label for="b">Ingresa el valor de b:</label><br><br>
                <input type="number" name="b" id="b"><br><br>
                <button type="submit">Enviar</button>
            </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a == 0){
        $mensaje = "<br><br>El valor de a no puede ser 0";
    }else{
        $x = -$b / $a;
        $mensaje = "<br><br>El valor de x es:$x";
    }
    echo $mensaje;
}
?>
<a href="practica28.php"><br><br>Siguiente Practica</a>
</section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez.</p></footer>
</body>
</html>
