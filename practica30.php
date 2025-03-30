<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 30</title>
</head>
<body>
    <header><h1>3 mejores notas</h1></header>
    <main>
        <form action="" method="POST">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" required>
            <br><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" required>
            <br><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" required>
            <br><br>
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" id="nota4" required>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            $notas = array($nota1, $nota2, $nota3, $nota4);
            rsort($notas);

            $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

            echo "<p>El promedio de las 3 mejores notas es:
             " . number_format($promedio, 2) . "</p>";
            if($promedio >= 6){
                        echo "<p>Aprobado</p>";
            } else {
                echo "<p>Reprobado</p>";
            }
        }
        ?>
    
    </main>
    <footer><p>Nubia Azucena Romero Lopez</p></footer>
</body>
</html>
