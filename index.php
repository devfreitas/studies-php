<?php

echo "\tBem vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; 
// argv[1] -> Pega o primeiro parâmetro digitado no terminal após a linha de comando.
// ?? -> Se o que estiver a esquerda for nulo, acessa o que está depois do operador '??'.

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

// echo $notaFilme;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento do filme: $anoLancamento\n";