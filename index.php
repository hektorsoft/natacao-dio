<?php


## TESTANDO IF ELSE SE ESTA TUDO OK ANTES DE IMPLEMENTAR O FORMULARIO.
$nome = "Gabriel";

$idade= "10";

if ($idade>18){
    echo("Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adulto!");
}   
elseif($idade<=18 and $idade>=13){
    echo("Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adolescente!");
}
elseif($idade >=6 and $idade <=12 ){
    echo("Olá $nome, por sua idade ser de $idade anos, você está na categoria: Infatil!");

}
else
    echo ("Olá $nome, por sua idade ser de $idade anos, você está na categoria: competir!");
?>