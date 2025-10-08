<?php

//o escopo global afeta blocas de codigos que não sejam funções

// tag global + o nome da variavel é usada para utilizar uma variavel global dentro de blocos de codigos incluindo as funções.

$teste = "asd";

echo "teste global 1 <br>";

if(5 > 2){
    $teste = "dsa";

    echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function funcao(){
    $teste = "sada";
    echo "$teste local <br>";
}

funcao();

function testandoGlobal(){
    global $teste;

    $teste = 2;
    echo "$teste global função <br>";
}

testandoGlobal();

echo "$teste global 3 <br>";




