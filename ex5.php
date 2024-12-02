<?php
$dado1=rand(1,6);
$dado2=rand(1,6);
print"<p> \n";
print "<img src=\" img/$dado1.svg\" width=100 height=100>\n";
print "<img src=\" img/$dado2.svg\"width=100 height=100>\n";

echo "<br>";
if($dado1==$dado2){
    echo 'GANASTE! LOS DADOS SON IGUALES';
}
else{
    if($dado1<>$dado2){
        echo 'PERDISTE! LOS DADOS SON DIFERENTES';
    }
}
?>