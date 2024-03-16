<?php
class Produto {
    public $id;
    public $descricao;
    public $preco;
    public $fornecedor;
    public function inserirProduto ($descricao, $preco, $fornecedor){
        echo "Produto inserido com sucesso!";
    }
}