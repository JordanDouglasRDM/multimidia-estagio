<?php
    $usuarios = require_once '../../backend/app/files/recupera-usuarios.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Lista de usuários</p>

    <?php echo '' ?>

    <?= ''?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td> <?= $usuario->id ?> </td>
                <td> <?= $usuario->name ?> </td>
                <td> <?= $usuario->email ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>