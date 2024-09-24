<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./feedback.css">
    <title>Feedback</title>
</head>
<body>
    <form method="post" action="processar_feedback.php">
        <h1>Avalie um produto</h1>
        <div class="selecione">
            <p id="p-selecione">Selecione o produto:</p>
            <select id="selecao" name="produto">
                <option value="selecionar" name="selecionar">
                    Selecionar
                </option>
                <option value="teste" name="teste">
                    teste
                </option>
            </select>
        </div>
        <div class="selecione">
            <p id="p-selecione">Nível de satisfação:</p>
            <select id="selecao" name="avaliacao">
                <option value="selecionar" name="selecionar">
                    Selecionar
                </option>
                <option value="Insatisfeito" name="insatisfeito">
                    Insatisfeito
                </option>
                <option value="Neutro" name="neutro">
                    Neutro
                </option>
                <option value="Satisfeito" name="satisfeito">
                    Satisfeito
                </option>
            </select>
        </div>
        <textarea name="comentario" id="comentario" placeholder="Adicione um comentário" required></textarea>
        <button id="envia" type="submit">Enviar</button>
    </form>
</body>
</html>