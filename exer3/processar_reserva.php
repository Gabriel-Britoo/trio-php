<!-- Ana Lívia, Gabriel Reis, Isadora -->
<?php 
$nome = $_POST['nomeReuniao'];
$data = $_POST['dataReuniao'];
$hora = $_POST['horaReuniao'];

if ($nome != "" || $data != "" || $hora != ""){ 
    echo "<div id='agendar'><h3>Bem-vindo, $nome!</h3><p>Sua reunião foi agendada para o dia: </p><strong>$data às $hora</strong></div>";
}
?>
<!DOCTYPE html>
 <html lang="pt">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="reserva.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 </head>
 <body>
    
 </body>
 </html>