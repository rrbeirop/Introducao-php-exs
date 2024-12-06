<?php 
 
require_once __DIR__. "\..\..\model\Filme.php";


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome   = $_POST["nome_filme"];
    $descricao = $_POST ["descricao"];
    $ano = $_POST ["ano"];
    $url_img = $_POST["url_img"];

    
    $filmeModel = new Filme();
    $filmeModel->cadrastro($nome, $descricao, $ano , $url_img);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style2.css"/>
    <title>cadrastro</title>
</head>
<body>
    <button></button>
    <!-- Formulário que envia os dados para o arquivo processar.php -->
    <form class="formulario" action="cadastro.php" method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome_filme" required>

        </div>
        
        <div>

            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao" rows="4" cols="50" ></textarea>
        </div>

        <div> 

            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" >
        </div>
        
        <div> 

            <label for="url_img">Link da imagem:</label>
            <input type="text" name="url_img">
        </div>

        <button type="submit">CADASTRAR</button>
        <a class="voltar" href="listar.php">VOLTAR</a>
    </form>
</body>
</html>
