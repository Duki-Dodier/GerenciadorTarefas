<?php

session_start();

$db_host = '172.17.0.3';
$db_user ='root';
$db_pass = 'root';
$db_name = 'gerenciador_tarefas';


$pdo =  new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_pass);