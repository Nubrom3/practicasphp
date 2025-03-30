<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 21</title>
</head>
<body>
    <header>
        <h1>Numero mayor de 3 numeros</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num1">Ingresa el numero 1:</label>
                <input type="number" id="num1" name="num1"><br><br>
                <label for="num2">Ingresa el numero 2:</label>
                <input type="number" id="num2" name="num2"><br><br>
                <label for="num3">Ingresa el numero 3:</label>
                <input type="number" id="num3" name="num3"><br><br>
                <button type="submit">Enviar</button><br>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $n3 = $_POST['num3'];

                if($n1 > $n2 && $n1 > $n3){
                    $mayor = $n1;
                }else if ($n2>$n1 && $n2>$n3){
                    $mayor = $n2;
                }else {
                    $mayor = $n3;
                }
                echo "<br>El numero $mayor es el mayor de los 3 numeros";
            }
            ?>
            <br><br><br>
            <a href="practica22.php">Siguiente practica</a>
        </section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez</p></footer>
</body>
</html>