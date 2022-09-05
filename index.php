<?php
require_once "config.php";

require_once "Task.php";
$task = new Task($pdo);
$data = $task->tarefa();


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>GerenciadorTarefas</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>GerenciadorTarefas</h1>
        </div>
        <div class="form">
            <form action="task_actions.php" method="POST">
                <label for="task_name">Tarefa:</label>
                <input type="text" name="task_name" placeholder="Nome da Tarefa">
                <button type="submit">Cadastrar</button>
            </form>

        </div>
        <div class="separador">

        </div>
        <div class="list-tasks">
            <ul>
                <?php foreach($data as $item): ?>
                    <li><?= $item['tarefa']?></li>
                <?php endforeach ?>
            </ul>
                    
        </div>
        <div class="footer">
            <p>Desenvolvido por @Kadimus</p>
        </div>
    </div>

</body>

</html>