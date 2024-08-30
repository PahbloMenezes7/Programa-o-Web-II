<?php

/**
 * @author Pahblo Henrique & Paulo Eduardo
 * data agosto/2024
 * classe com conexao a banco de dados
 * @return boolean
 */

class Contato {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;
    private $idade;
    private $cel;

    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getEmail(){
        return $this->email;
    }
    function getSenha(){
        return $this->senha;
    }
    function getPdo(){
        return $this->pdo;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }

    function __construct(){
        // Correção do host "loscalhost" para "localhost"
        $dsn = "mysql:dbname=etimcontato;host=localhost";
        $dbUser = "root";
        $dbpass = "";

        try{
            $this->pdo = new PDO($dsn, $dbUser, $dbpass);
            // echo "<script>alert('conectado no banco')</script>";
        } catch (\Throwable $th) {
            // echo "<script>alert('banco indisponievel. tente novamente mais tarde!')</script>";
            // echo $th;
        }
    }

    function insertUser($nome, $email, $senha){
        // Passo 1 - Criar uma variável com a consulta SQL
        $sql = "INSERT INTO usuarios SET nome = :n , email = :e , senha = :s";

        // Passo 2 - Quando tem apelidos, tem que usar o método prepare
        $sql = $this->pdo->prepare($sql);

        // Passo 3 - Depois do prepare, usar o bindValue, um para cada apelido
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);

        // Passo 4 - Executar o comando
        return $sql->execute();
    }

    function insertAtividade($nome, $idade, $cel){
        // Passo 1 - Criar uma variável com a consulta SQL
        $sql = "INSERT INTO atividade SET nome = :nome, idade = :idade , cel = :cel";

        // Passo 2 - Quando tem apelidos, tem que usar o método prepare
        $sql = $this->pdo->prepare($sql);

        // Passo 3 - Depois do prepare, usar o bindValue, um para cada apelido
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":idade", $idade);
        $sql->bindValue(":cel", $cel);

        // Passo 4 - Executar o comando
        return $sql->execute();
    }
}
