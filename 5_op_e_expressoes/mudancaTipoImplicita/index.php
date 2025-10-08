<?php
// a forma de concatenar em php é diferente das outras linguas que utilização " + " . Em php é utilizado " . " para realizar a concatenação. Lembrando sempre e utilizar o sinal de ponto espaçado das variaveis.

echo 5 /2 ;
echo "<br>";

if(is_float(5/2)){
    echo " é um float";
    echo "<br>";
}

echo 2 . 3;
echo"<br>";

if(is_string(2 . 3)){
    echo " é uma string";
    echo "<br>";
}

$nome =  "Davi";
$sobrenome = "Bertolino";

$nomeCompleto = $nome . " " . $sobrenome;


echo $nomeCompleto;
echo "<br>";





