<?php
require_once "config.php";
require_once "Task.php";
$task = new Task($pdo);
$data = $task->limpar();
header("Location: index.php");
exit;

?>