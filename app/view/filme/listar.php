

<?php

require_once __DIR__ ."/../../model/Filme.php";

$filmeModel = new Filme();
$filmes = $filmeModel->buscarTodos();

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/style2.css"/>
<body>


    <style> 
        .notificacao {
            position: fixed;
            top: 20px;
            right: 20px;
            color: white;
            padding: 16px;
            border-radius: 5px;
            box-shadow: 0 2px 10px( 0, 0 , 0 , 1);
            z-index: 10;

            &.sucesso {
                background-color: greenyellow;
            }

            &.erro{
                background-color: red;
            }
        }

    </style>
</head>
    <section class="conteiner">
        <div class="acao">
            <a href="cadastro.php">
                <button>
                    <span>NOVO</span>
                </button></a>
        
    
    
        </div>


<table border="1"> 
<thead>
    <th>Id</th>
    <th>NOME</th>
    <th>ANO</th>
    <th>DESCRIÇÃO</th>
    <th>AÇÕES</th>
</thead>
<tbody>
    <?php 
    foreach ($filmes as $filme){ ?>
        <tr>  
            <td><?php echo $filme->id?></td>
            <td><?php echo $filme->nome_filme?></td>
            <td><?php echo $filme->ano?></td>
            <td><?php echo $filme->descricao?></td>
            <td>
                <form action="visualizar.php" method="get">
                    <input
                        type="hidden"   
                        name="id"
                        value="<?php echo $filme->id; ?>">

                    <button><i class="fa-solid fa-circle-info"></i></button>
                </form>

                <form action="excluir.php" method="POST">
                <input
                        type="hidden"   
                        name="id"
                        value="<?php echo $filme->id; ?>">
                    <button onclick="return confirm('tem certeza que deseja excluir')">
                    <i class="fa-solid fa-trash"></i></button>
                    
                </form>

                <form action="editar.php" method="GET">
                <input type="hidden" name="id" value="<?php echo $filme->id;?>" >
                <input type="hidden" name="nome" value="<?php echo $filme->nome_filme;?>" >
                <input type="hidden" name="ano" value="<?php echo $filme->ano;?>" >
                <input type="hidden" name="descricao" value="<?php echo $filme->descricao;?>" >
                <input type="hidden" name="imagem" value="<?php echo $filme->url_img;?>" >
                
                <button><i class="fa-solid fa-pen-to-square"></i> </button>
                </form>
                <!-- funcionalidade -->
            </td>
        </tr>
    
        
<?php } ?>




    <script src="../../public/js/main.js" ></script>
    </tbody>
</body>
</table>
</html>