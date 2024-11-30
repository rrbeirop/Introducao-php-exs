<?php 

require_once __DIR__. "\..\config\database.php";
//classe tabela filme do pj //

Class Filme {
    private $tabela = "nome";
    private $pdo;
    
    // colunas //
    public $id;
    
    public $nome_filme; 
    public $descricao;
    public $ano;

    public function __construct() {
        global $pdo;
        
        $this->pdo = $pdo;
    }

//metado que busca todos os filmes
    public function buscarTodos() {
        $query = "select * from $this->tabela ORDER BY id DESC";
        $stmt = $this->pdo->prepare($query);
        $stmt -> execute();
        $stmt ->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
        
        return $stmt->fetchAll();
                // $filmes = $stmt->fetchAll();

        // echo "<pre> ";
        // print_r($filmes);
        // echo "</pre>";
    }

    public function buscarTodosPorId($id){
        $query = "SELECT * FROM $this->tabela where id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id ,PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,__CLASS__);

        return $stmt->fetch();
    }

    #metado para excluir 

    public function excluir($id){
        $query = "DELETE FROM  $this->tabela where id = :id" ;
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id,PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->rowCount() >0;

    
    
    
    }

    #metado cadrastosss

    public function  cadrastro($nome, $descricao, $ano){
        $query = "INSERT INTO $this->tabela (nome_filme, descricao, ano) values (:nome, :descricao, :ano)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":nome", $nome ,PDO::PARAM_STR) ;
        $stmt->bindParam(":descricao", $descricao ,PDO::PARAM_STR ) ;
        $stmt->bindParam(":ano", $ano , PDO::PARAM_INT) ;
        $stmt->execute();

        if($stmt) {
            return header("Location: listar.php?mensagem=sucesso");}
        
        else{
            return header("Location: listar.php?mensagem=erro");}
    }

    #metado editar 
    public function editar($id,$nome, $ano, $descricao){
        $query = "UPDATE $this->tabela set nome_filme = :nome , ano = :ano , descricao = :descricao where id = :id ";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome) ;
        $stmt->bindParam(":descricao", $descricao ) ;
        $stmt->bindParam(":ano", $ano) ;
        $stmt->execute();
        
        if($stmt) {
            return header("Location: listar.php?mensagem=sucesso");}
        
        else{
            return header("Location: listar.php?mensagem=erro");}
        
            
}}