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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Document</title>
</head>

<body>
    <p>Lista de usuários</p>

    <?php echo '' ?>

    <?= '' ?>
    <div class="field has-addons has-addons-centered">
        <table >
            <thead class="box">
                <tr class="level">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody class="box">
                <?php foreach ($usuarios as $usuario): ?>
                    <tr class="level">
                        <td> <?= $usuario->id ?> </td>
                        <td> <?= $usuario->name ?> </td>
                        <td> <?= $usuario->email ?> </td>
                        <td> <?= $usuario->level ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>