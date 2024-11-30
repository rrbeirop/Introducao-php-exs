<?php 
 
require_once __DIR__. "\..\..\model\Filme.php";


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome   = $_POST["nome_filme"];
    $descricao = $_POST ["descricao"];
    $ano = $_POST ["ano"];

    
    $filmeModel = new Filme();
    $filmeModel->cadrastro($nome, $descricao, $ano);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadrastro</title>
</head>
<body>
    <!-- Formulário que envia os dados para o arquivo processar.php -->
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome_filme" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea><br><br>


        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required><br><br>

        <button type="submit">Cadrastrar</button>
    </form>
</body>
</html>
