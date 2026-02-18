<?php
/*
1 - Escreva um programa em PHP que exiba seu nome na tela.

2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
*/

echo "Rafael de Freitas Moraes";

$nota = 10;
$nota += 9;
$nota += 10;
$resultado = $nota / 3;
echo "\n$resultado";

$metros = 5;
$centimetros = $metros * 100;
echo "\n$metros metros equivalem a $centimetros centímetros.";

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "\n$ano é bissexto.";
} else {
    echo "\n$ano não é bissexto.";
}

$temperaturaEmCelsius = 30.4;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "\nA temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";

echo $mensagem;