<?php
include 'Contato.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instancia a classe Contato
    $contato = new Contato();

    // Insere o usuário no banco de dados
    $resultado = $contato->insertUser($nome, $email, $senha);

    // Verifica se a inserção foi bem-sucedida
    if ($resultado) {
        echo "
        <script>
        alert('Usuário cadastrado com sucesso!');
        </script>";
    } else {
        echo "
        <script>
        alert('Erro ao cadastrar usuário.');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0ff; /* Fundo azul claro */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #e6e6fa; /* Fundo roxo claro */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #4b0082; /* Roxo escuro */
        }

        label {
            color: #4b0082;
            font-weight: bold;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #9370db; /* Roxo médio */
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #7a42f4; /* Roxo mais escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
