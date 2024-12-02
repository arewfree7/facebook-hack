<?php
$simbolo=rand(1,4);
$num=rand(1,13);

echo '<br>';

if($simbolo==1){
    echo 'La carta sorteada es: <h1 style="color:rgb(255,0,0)">'.$num.' ♥ ';
}
else{
    if($simbolo==2){
        echo 'La carta sorteada es: <h1>'.$num.' ♦ ';
    }
    else{
        if($simbolo==3){
            echo 'La carta sorteada es: <h1>'.$num.' ♣ ';
        }
        else{
            echo 'La carta sorteada es: <h1>'.$num.' ♠ ';
        }
    }
}

?>