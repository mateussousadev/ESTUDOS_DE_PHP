<?php

echo "Boas vindas ao Screen Match \n";

$nomeFilme = 'Top Gun - Maverick';
$anoLancamento = 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.7;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas/5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2022;

echo "Nome do filme: " .$nomeFilme. "\n";
echo "Nota do filme: $notaFilme\n;";