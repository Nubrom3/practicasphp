<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 26</title>
</head>
<body>
    <header>
        <h1>Orden ascendente</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num1">Ingresa el primer numero:</label><br><br>
                <input type="number" id="num1" name="num1"><br><br>
                <label for="num2">Ingresa el segundo numero:</label><br><br>
                <input type="number" id="num2" name="num2"><br><br>
                <label for="num3">Ingresa el tercer numero:</label><br><br>
                <input type="number" id="num3" name="num3"><br><br>

                <button type="submit">Enviar</button>
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $n3 = $_POST['num3'];

                if ($n1 < $n2 && $n1 < $n3 ) {
                    $menor = $n1;
                } else if ($n2 < $n1 && $n2 < $n3){
                    $menor = $n2;
                } else {
                    $menor = $n3;
                }
            if ($n1>$n2 && $n1>$n3){
                $mayor=$n1;
            } else if ($n2>$n1 && $n2>$n3){
                $mayor=$n2;
            } else {
                $mayor =$n3;
            }
            $intermedio = ($n1+$n2+$n3)-($mayor+$menor);
            }
            echo "Los numeros en orden serian:<br><br> Numero mayor: ".$mayor. "<br><br>El numero intermedio es: ".$intermedio."<br><br>El numero menor es: ".$menor;
            ?><br><br><br>
        <a href="practica27.php">Siguiente practica</a>
        </section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez.</p></footer>
</body>
</html>