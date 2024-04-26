<?php
require 'Produto.class.php';

$p=new Produto();
$p -> setDescricao("Computador Lenovo");
$dados = $p -> getDescricao();

echo '<h2>O conteudo do atributo descrição é: '.$dados;
