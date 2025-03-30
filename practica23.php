<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 23</title>
</head>
<body>
    <header>
        <h1>Multiplo de 3 y 5</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label><br><br>
                <input type="number" id="num" name="num"><br><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
               $numero = $_POST['num'];
               
               if ($numero % 3 == 0 && $numero % 5 == 0){
                $mensaje = "<br>El numero " . $numero . " es multiplo de 3 y 5";
               } else {
                $mensaje = "<br>El numero " . $numero . " no es multiplo de 3 y 5";
               }
               echo $mensaje;
            }
            ?><br><br><br>
            <a href="practica24.php">Siguiente practica</a>
        </section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez.</p></footer>
</body>
</html>