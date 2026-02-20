<?php

echo "\tBem vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber nao case";
$anoLancamento = 2022; 
// argv[1] -> Pega o primeiro parâmetro digitado no terminal após a linha de comando.
// ?? -> Se o que estiver a esquerda for nulo, acessa o que está depois do operador '??'.

$somaDeNotas = 0;

$somaDeNotas += $argv[1];
$somaDeNotas += $argv[2];
$somaDeNotas += $argv[3];

$qtdNotas = $argc - 1;
$notaFilme = $somaDeNotas / $qtdNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

// echo $notaFilme;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento do filme: $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento\n";
} else if ($anoLancamento < 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber nao case" => "comédia"
};
echo "O gênero do filme é: $genero";
echo "$argc";

