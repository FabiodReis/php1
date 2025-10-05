<?php
$carro = ['modelo' => 'Civic', 'fabricante' => 'Honda', 'ano' => 1999, 'cor' => 'prata', 'blindado' => false, 'tetoSolar' => true ];

print_r($carro);
echo "<br>";

echo $carro['modelo'];
echo "<br>";

$modelo = $carro['modelo'];
$ano = $carro['ano'];
$cor = $carro['cor'];


echo "O carro é um $modelo do ano de $ano e da cor $cor";




?>