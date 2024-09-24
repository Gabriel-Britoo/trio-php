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
    <form method="post" action="processar_feedback.php">
        <h1 id="h1-avalie">Avalie um produto</h1>
        <h2 id="h2-avalie">Apreciamos muito sua opnião!</h2>
        <div class="selecione">
            <p id="p-selecione">Selecione o produto:</p>
            <select id="selecao" name="produto">
                <option value="selecionar" name="selecionar">
                    Selecionar
                </option>
                <option value="Batedeira" name="batedeira">
                    Batedeira
                </option>
                <option value="Televisão" name="televisao">
                    Televisão
                </option>
                <option value="Air Fryer" name="air fryer">
                    Air Fryer
                </option>
                <option value="Secador" name="secador">
                    Secador
                </option>
            </select>
        </div>
        <div class="selecione">
            <p id="p-selecione">Nota ao produto:</p>
            <select id="selecao" name="avaliacao">
                <option value="selecionar" name="selecionar">
                    Selecionar
                </option>
                <option value="★☆☆☆☆" name="pessimo">
                    1 ★☆☆☆☆
                </option>
                <option value="★★☆☆☆" name="ruim">
                    2 ★★☆☆☆
                </option>
                <option value="★★★☆☆" name="regular">
                    3 ★★★☆☆
                </option>
                <option value="★★★★☆" name="bom">
                    4 ★★★★☆
                </option>
                <option value="★★★★★" name="excelente">
                    5 ★★★★★
                </option>
            </select>
        </div>
        <textarea name="comentario" id="comentario" placeholder="Adicione um comentário" required></textarea>
        <button id="envia" type="submit">Enviar</button>
    </form>
</body>
</html>