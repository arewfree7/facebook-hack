<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/dado.png">
    
    <title>Juego de dados</title>
</head>
<body>
    <?php
    // JUEGO: EL DADO MÁS ALTO
    // Dos jugadores, cada jugador tiene un solo dado 
    $jugador1 = rand(1,6);
    $jugador2 = rand(1,6);

    print "<p>\n";
    print "<img src=\"img/$jugador1.svg\" width=\"140\" >\n";
    print "<img src=\"img/$jugador2.svg\" width=\"140\" >\n";
    print "<p>\n";

    if($jugador1 > $jugador2){
        echo '¡GANÓ EL JUGADOR 1!';
    }
    if($jugador1 == $jugador2){
        echo '¡ES UN EMPATE!, VUELVAN A TIRAR LOS DADOS... ';
    }
    if($jugador2 > $jugador1){
        echo '¡GANÓ EL JUGADOR 2!';
    }

    ?>
</body>
</html>