<?php
// Creamos una función para averigua si el número es par o impar y obtiene también su cuadrado.
$num = $_GET['numero']; 
$cuadrado = $_GET['numero'];
// esto hace que si es par llame a la página par.php y si no llama a la página impar.php
if (ParImpar($cuadrado)){ 
    header("Location:par.php?num=$num&cuadrado=$cuadrado");
} else {
    header("Location:impar.php?num=$num&cuadrado=$cuadrado"); 
}
// esta función averigua el cuadrado de numero y si es o no par. 
function ParImpar(&$num){ // & hace que se modifique la variable.
    $num = $num * $num;
    if ($num %2 == 0){
        return true;
    }else {
        return false;
    } 
}

?>