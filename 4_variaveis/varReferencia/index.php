<?php

// "=&""  igual com & comercial é usado para usar uma variavel refencial

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$y = 15;

echo "<br>";
echo "Atribuição após referência <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atribuição após referência 2 <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Fabio Reis";

$nome2 =& $nome;

echo "<br>";
echo "Atribuição após referência 3 <br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Davi Bertolino";
echo "<br>";
echo "Atribuição após referência <br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

