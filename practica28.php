<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 28</title>
</head>
<body>
    <header><h1>Mayor o menor de edad</h1></header>
    <main>
<section>
            <form action="" method="POST">
                <label for="edad">Ingresa tu edad</label>
                <input type="number" name="edad" id="edad"><br><br>
                <button type="submit">Enviar</button>
            </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $edad = $_POST['edad'];
    if($edad >= 18){
        echo "<br><br>Eres mayor de edad";
    }else{
        echo "<br><br>Eres menor de edad";
    }
    
}
?>  
<a href="practica29.php"><br><br>Siguiente Practica</a>
</section>
    </main>
    <footer><p>Nubia Azucena Romero Lopez</p></footer>
</body>
</html>
