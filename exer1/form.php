<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body >
    <section id="secao1">
        <div id="box-login">
                    <div id="box-img-login">
                        <img id="img-login" src="../img/imgLogin.png" alt="">
                    </div>
        
        <form method="post" action="cadastrar.php">
                        <h1>LOGIN</h1>
                        <input name="nome" class="inserir" type="text" placeholder="Nome" required>
                        <input name="email" class="inserir" type="email" placeholder="Email" required>
                        <input name="tel" class="inserir" type="tel" placeholder="Telefone" required>
                        <button id="entrar" type="submit">entrar</button>
                        
                    </form>
        </body>
    </section>
    

</html>