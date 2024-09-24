<?php
$produto = $_POST['produto'];
$avaliacao = $_POST['avaliacao'];
$comentario = $_POST['comentario'];

if($produto != 'selecionar' && $avaliacao != 'selecionar'){
    echo "<div id='show-feedback'>
            <h1 id='obrigado'>Obrigado por compartilhar!</h1>
            <div id='texto-resultado'>
                <p class='p-resultado-feedback'>Produto: $produto<p>
                <p class='p-resultado-feedback'>Avaliação: $avaliacao<p>
                <p class='p-resultado-feedback'>\"$comentario\"<p>
            </div>
          <div>";
}
else{
    echo "<script>alert('Preencha todos os campos');
    location.replace('feedback.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./feedback.css">
    <title>Feedback</title>
</head>
<body>
    
</body>
</html>