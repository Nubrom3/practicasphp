<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
    <header>
        <h1>Doble y triple</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label><br><br>
                <input type="number" id="num" name="num"><br><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $numero = $_POST['num'];
                if ($numero  % 2 != 0) {
                    $mensaje = "<br>El doble del numero " . $numero . " es: " . ($numero * 2);
                } else {
                    $mensaje = "<br>El triple del numero " . $numero . " es: " . ($numero * 3);
                }
                echo $mensaje;
            }
            ?><br><br><br>
        <a href="practica26.php">Siguiente practica</a>
        </section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez.</p></footer>
</body>
</html>