<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NumeroPar</title>
    <link rel="stylesheet" href="cssProyecto.css"> <!-- Estilos-->
</head>
<body class="Par">
    <!-- creamos una variable para cada enlace y lo concatenamos con html -->
<?php
$num = $_GET['num'];
$cuadrado = $_GET['cuadrado'];
echo '<div class="numeropar"><p>Número introducido: ' . $num . '</p></div><br/>
<div class="cuadradopar"><p>Cuadrado del número: ' . $cuadrado . '</p></div><br/>
<div class="siespar"><p> Es un número par</p></div><br/>';
?>
</body>
</html>
