<?php
//recuperar idade
//recuperar idade
echo '<pre>';
//var_dump($_GET);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];

    if ($idade === '') {
        echo '
            <script>
                alert("Preencha o campo que identifica sua idade");
                window.location.href = "../../../frontend/src/index.html";
            </script>
        ';
    } 
    else if ($idade >= 18) {
        echo '
            <script>
                alert("Você pode acessar");
                window.location.href = "../../../frontend/src/index.html";
            </script>
        ';
    } 
    else {
        echo '
            <script>
                alert("Você não pode acessar");
                window.location.href = "../../../frontend/src/index.html";
            </script>
        ';
    }
}