<?php

global $pdo;
require_once 'C:\meusprojetos\exemplo\backend\app\config\database.php';


$statement = $pdo->query("SELECT * FROM users;");
return $statement->fetchAll();



//require -- uma importação é obrigatória
//require_once - uma importação é obrigatória, mas inclui apenas uma vez
//include -- uma importação não é obrigatória
//iclude_once -- uma importação não é obrigatória apenas uma vez

