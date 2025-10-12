<?php

// operação tenaria seria uma forma mais "facil" e direta de fazer o if e else, sendo que voce coloca um comparações sem a necessidade do parentese e depois coloca o sinal de interrogação (?), na frente do sinal de interrogação voce coloca as condições que serão exibidas caso true ou false, separando elas pelo sinal de dois pontos (:) 

//true
echo 20 > 10 ? " Deu true <br>" : "Deu false";

//false
echo 20 < 10 ? " Deu true <br>" : "Deu false <br>";

$a = 10;
$b = 5;


echo $a >= $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b && 10 > 5? "Deu true <br>" : "Deu false <br>";