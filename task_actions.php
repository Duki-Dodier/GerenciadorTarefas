<?php

require_once "config.php";
require_once "Task.php";

date_default_timezone_set('America/Sao_Paulo');

$task_name = filter_input(INPUT_POST,'task_name');

if(!empty($task_name))
{
    $task = new Task($pdo);
    $task->salvarTarefa($task_name);
    
}else{
    $_SESSION['message'] =  "Digite uma tarefa!";
    header("Location: index.php");
    exit;
}