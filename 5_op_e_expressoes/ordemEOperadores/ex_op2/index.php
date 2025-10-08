<?php

// gettype para saber os tipos das variaveis


$operacao = "5" * 2;

echo $operacao . "<br>";

echo gettype($operacao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");
