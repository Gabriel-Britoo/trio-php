<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];

if ($nome != "" && $email != "" && $tel !="") {
    echo " <div id='divBemVindo'><h2>Bem-vindo(a) $nome </h2> <hr>
    <h1>Seu cadastro foi realizado com sucesso!</h1> <hr>
    <p>Lista de informações:</p>
    <ul>
    <li> O nome inserido foi: $nome</li>
    <li> O email inserido foi: $email</li>
    <li> O telefone inserido foi: $tel</li>
    </ul></div>";         
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex1.css">
</head>
<body id="body2">


</body>
</html>