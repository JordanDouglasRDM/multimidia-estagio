<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=rce', 'root', 'admin', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);

    //CRUD
    //C = CREATE
    //R = READ
    //U = UPDATE
    //D = DELETE

    //1. PROCEDURAL
    //2. POO (CLASSES)
    //3. SLIM (FRAMEWORK)
    //4. AUTENTICAÇÃO COM JWT (TALVEZ)



//    return 'retornado com sucesso';

//    $data = [
//        'nome' => 'Jordan'
//    ];
//    $data['nome'];
//    $data->nome;

    //em javaScript
    //const data = {nome: "Jordan"};
    //data.nome
} catch (PDOException $exception) {
    return $exception->getMessage();
}
