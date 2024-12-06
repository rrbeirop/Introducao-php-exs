<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php 


$id = $_GET["id"]; 


if ($id == "") {    
    return header("Location: listar.php");
}

require_once __DIR__ ."/../../model/Filme.php";

$filmeModel = new Filme();
$filme = $filmeModel->buscarTodosPorId($id);

// var_dump($filme);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="../../public/css/style2.css"/>

</head>
<body>
    <!-- <section class="conteiner"> -->
    <div class="formulario" id = "visualizar">
        <h1>Detalhes do Filme</h1> 
        
        <p>Nome <?php echo $filme->nome_filme?></p>
        <p>Descrição <?php echo $filme->descricao?></p>
        <p>Ano<?php echo $filme->ano?></p>
        <img src="<?php echo $filme->url_img?>" alt="">

        <a href="listar.php">
        <button><i class="fa-solid fa-rotate-left"></i>VOLTAR </button>
    </div>
   
</body>
</html>