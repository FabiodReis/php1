<?php

//operador identico, só sera true quando os valores e a variavel for igual, ou seja precisa ser do mesmo tipo de variavel.

if(5 == "5"){
    echo "5 é igual a 5 <br> ";
}


//operador de identico false
if(5 === "5"){
    echo "5 é igual a 5" ;
}


//operador de identico true

if(5 === 5){
    echo "5 é igual a 5 <br>";
}

 $a = 7;
 $b = 7;
 $c = "7";

if($a === $b){
    echo "A é igual a B <br>";
}

if($b === $c){
    echo "A é igual a B <br>";
}