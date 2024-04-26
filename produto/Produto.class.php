<?php
class Produto{
    private $id;
    private $descricao;
    private $preco;
    private $fornecedor;

    public function getId(){
        return $this->id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setDescricao($desc){
        $this-> descricao = $desc;
    }
}