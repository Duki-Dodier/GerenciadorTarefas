<?php

class Task 
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function salvarTarefa($tarefa)
    {
    $data = date("d/m/y");
    $query = "INSERT INTO tasks (tarefa, date) VALUES (:tarefa, :date)";

    


    $sql = $this->pdo->prepare($query);
    $sql->bindValue(':tarefa',$tarefa);
    $sql->bindValue(':date',$data);
    $sql->execute();

    $_SESSION['sucesso'] = "Tarefa Cadastrada";
    header("Location: index.php");
    exit;
    }

    public function tarefa()
    {
        $query = "SELECT * FROM tasks";

        $sql = $this->pdo->prepare($query);
        $sql->execute();
        
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

   
        
        return $data;
    }
}