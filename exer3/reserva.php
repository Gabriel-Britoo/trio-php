<!-- Ana Lívia, Gabriel Reis, Isadora -->
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
   <form method="post" action="processar_reserva.php">
      <h2>Agende sua reunião</h2>
      <label for="nome">Nome:</label>
      <input id='nome' type="text" name="nomeReuniao" required>

      <label for="data">Data da reunião:</label>
      <input id="data" type="date" name="dataReuniao" required>

      <label for="hora">Horário da reunião:</label>
      <input id="hora" type="time" name="horaReuniao" required>
      <button type="submit">Reservar</button>
   </form>
 </body>
 </html>