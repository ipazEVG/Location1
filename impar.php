<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerompar</title>
    <link rel="stylesheet" href="cssProyecto.css">   <!--estilos-->
</head>
</head>
<body class=" impar">
<!-- creamos una variable para cada enlace y lo concatenamos con html -->
<?php
$num = $_GET['num'];
 $cuadrado = $_GET['cuadrado'];
 echo '<div class="numeroimpar"><p>Número introducido: ' . $num . '</p></div><br/>
 <div class="cuadradoimpar"><p>Cuadrado del número: ' . $cuadrado . '</p></div><br/>
 <div class="siesimpar"><p> Es un número impar</p></div><br/>';
?>   
</body>
</html>
