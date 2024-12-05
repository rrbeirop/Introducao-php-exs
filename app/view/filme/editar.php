<?php 
 
require_once __DIR__. "\..\..\model\Filme.php";


if ($_SERVER['REQUEST_METHOD'] === "GET") {
   $id = $_GET ["id"];
   $nome = $_GET ["nome"];
   $ano = $_GET ["ano"];
   $descricao = $_GET ["descricao"];
   $url_img = $_GET["imagem"];
        
    // $descricao = $_GET["descricao"];
    // $ano = $_g["ano"]
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST ["id"];
    $nome = $_POST ["nome"];
    $ano = $_POST ["ano"];
    $descricao = $_POST ["descricao"];
    $url_img = $_POST ["imagem"];


require_once __DIR__ ."/../../model/Filme.php";
  
$filmeModel = new Filme();
$filmeModel->editar($id, $nome, $ano, $descricao, $url_img);
    
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>editar</title>    
    <link rel="stylesheet" href="../../public/css/style2.css">
   
</head>
<body>
    <form class="formulario" action="editar.php" method="POST">
        <input class="editar" type="hidden" name="id" value = "<?= $id;?>">
        <input class="editar"type="text" name="nome" value = "<?= $nome;?>"> 
        <input class="editar"type="text" name="ano"value = "<?= $ano;?>">
        <input class="editar"type="text" name="imagem"value = "<?= $url_img;?>">

        <textarea name="descricao" id="" cols="30" rows="10"><?=$descricao?></textarea>
        
        <button> Salvar</button>
    </form>
</body>
</html>