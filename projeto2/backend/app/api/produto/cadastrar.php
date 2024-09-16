<?php

// recuperar os dados via post, validar se preco é um float, e validar se em_estoque é um inteiro positivo.
//retornar erros se houver
// salvar no banco os dados

$nome =  'cadeira';
$preco =  200.25;
$emEstoque =  2;


$total = $preco * $emEstoque;
echo "total: {$total}";