<?php
/*Juego: El dado con mayor cantidad de puntos
Dos jugadores, cada jugador tiene 2 dados
al lanzar los dados, uno de ellos tiene que ganar y el otro perder
por la sumatoria de los dos dados y cuando sacan el mismo numero de dado
se mecionara que vuelvan a tirar los dados.*/

    $dado1_1j = rand(1,6);
    $dado2_1j = rand(1,6);

    $dado1_2j = rand(1,6);
    $dado2_2j = rand(1,6);

    $suma1=$dado1_1j+$dado2_1j;
    $suma2=$dado1_2j+$dado2_2j;

    print "<p>\n";
    print "<img src=\"img/$dado1_1j.svg\" width=\"140\" >\n";
    print "<img src=\"img/$dado2_1j.svg\" width=\"140\" >\n";

    echo "<br>";
    echo "EL jugador 1 tiene:".$suma1;
    echo "<br>";

    print "<img src=\"img/$dado1_2j.svg\" width=\"140\" >\n";
    print "<img src=\"img/$dado2_2j.svg\" width=\"140\" >\n";
    print "<p>\n";

    echo "<br>";
    echo "EL jugador 2 tiene:".$suma2;
    echo "<br>";

    if($suma1 > $suma2){
        echo '¡GANÓ EL JUGADOR 1!';
    }else
    if($suma2 >$suma1){
        echo '¡GANÓ EL JUGADOR 2!';
    }
    else{
        echo '¡ES UN EMPATE!, VUELVAN A TIRAR LOS DADOS... ';
    }


?>