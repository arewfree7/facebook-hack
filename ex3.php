<?php
$valor = rand(1,15000);
echo 'El valor sorteado es '.$valor;
echo '<br>';
echo '<br>';

if($valor <=9){
    echo 'El valor sorteado es de un digito ';
}
else{
    if($valor<=99){
        echo 'El valor sorteado es de 2 digitos';
    }
    else{
        if($valor>99&&$valor<1000){
            echo 'El valor sorteado es de 3 digitos';
        }
        else{
            echo '<h1>Error 404 Not Found<h1>';
        }
    }
}



?>