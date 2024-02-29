<?php

$nome = $POST['cxnome'];
$altura = $POST['cxaltura'];
$peso = $POST['cxpeso'];

$imc = $peso/ ($altura*$altura);

echo "Nome: ".$nome;
echo "IMC: ".$imc;
if($imc < 17)
{
    echo "Abaixo do peso";
}
else if($imc < 21)
{
    echo "Peso normal";
}
else if($imc < 26)
{
    echo "Sobrepeso";
}


