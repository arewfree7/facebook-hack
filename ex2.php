<?php
$valor = rand(1,10);//random es aleatorio
$var = 5;
echo 'El valor sorteado es '.$valor;
echo "<br>";
echo "<br>";

if($valor<$var){
    echo 'Es menor que '. $var;
}
elseif($valor==$var){
    echo 'Los números son iguales';
}
else {
    echo 'Es mayor que '.$var;
}
?>