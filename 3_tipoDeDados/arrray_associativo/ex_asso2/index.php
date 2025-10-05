<?php

$Cliente = ['Nome' => 'Davi', 'idade' => 11, 'altura' => 1.76, 'sexo' => 'Masculino'];


if($Cliente['idade'] >= 18){
    echo " O cliente é adulto";
}else{
    echo " O cliente é menor de idade";
}

?>