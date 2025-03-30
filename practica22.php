<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 22</title>
</head>
<body>
    <header>
        <h1>Es vocal o no es vocal</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
            <label for="caracter">Ingresa un caracter:</label><br><br>
            <input type="text" id="caracter" name="caracter" maxlength="1"><br><br>
            <button type="submit">Enviar</button><br><br>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $char = $_POST['caracter'];

                if($char == 'a' || $char == 'A'){
                    $resultado = 'es vocal';
                } else if ($char == 'e' || $char == 'E'){
                    $resultado = 'es vocal';
                } else if ($char == 'i' || $char == 'I'){
                    $resultado = 'es vocal';
                } else if ($char == 'o' || $char == 'O'){
                    $resultado = 'es vocal';
                } else if ($char == 'u' || $char == ''){
                    $resultado = 'es vocal';
                } else{
                    $resultado = 'no es vocal';
                }
                echo "<br>El caracter ingresado $resultado";
        }
            ?><br><br><br>
            <a href="practica23.php">Siguiente practica</a>
        </section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez.</p></footer>
</body>
</html>