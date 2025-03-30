<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 29</title>
</head>

<body>
    <header><h1>Doble y triple</h1></header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un numero</label>
                <input type="number" name="num" id="num"><br><br>
                <button type="submit">Enviar</button>
            </form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero = $_POST['num'];
    if($numero >0){
        $resultado =$numero * 2;
}else if($numero < 0){
    $resultado = $numero * 3;
}else{
    $resultado = 0;
}
echo "<br><br>El resultado es: $resultado";
}

?>
<a href="practica30.php"><br><br>Siguiente Practica</a>
</section>
    </main>
    <footer><p>Nubia Azucena Romero Lopezz</p></footer>
</body>
</html
