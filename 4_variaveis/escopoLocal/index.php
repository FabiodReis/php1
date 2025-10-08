<?php

// cada função terá seu escopo, que nao sera alterado externamente, mantendo sempre seus valores que forem declarados dentro da função

$x = 10;
echo "$x global <br>";

function teste(){
    $x = 5;
    echo "$x local <br>";
}

teste();

echo "$x global <br>";

teste();


function testando(){
    $x = 12;
     echo "$x local2 <br>";

}

$x = 99;

testando();

teste();

 echo "$x global <br>";