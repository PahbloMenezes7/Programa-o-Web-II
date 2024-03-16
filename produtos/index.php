<?php
require 'Produto.class.php';

$produto = new Produto();
$descricao =  'notebook';
$preco = 2.500;
$fornecedor = "dell";
$produto -> inserirProduto($descricao, $preco, $fornecedor);