<?php
$produto = $_POST['produto'];
$avaliacao = $_POST['avaliacao'];
$comentario = $_POST['comentario'];

if($produto != 'selecionar' && $avaliacao != 'selecionar'){
    echo "$produto <br> $avaliacao <br> $comentario";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>