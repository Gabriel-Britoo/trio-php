<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex1.css">
</head>
<body >
    <section id="secao1">
        <div id="box-login">
                    <div id="box-img-login">
                        <img id="img-login" src="../img/imgLogin.png" alt="">
                    </div>
        
        <form method="post" action="cadastrar.php">
                        <h1>LOGIN</h1>
                        <input id="nome" name="nome" class="inserir" type="text" placeholder="Nome" required>
                        <input id="email" name="email" class="inserir" type="email" placeholder="Email" required>
                        <input id="tel" name="tel" class="inserir" type="number" placeholder="Telefone" required>
                        <button id="entrar" type="submit">entrar</button>
                        
                    </form>
        </body>
    </section>
    <script>
        var nome = document.getElementById(nome)
        var email = document.getElementById(email)
        var tel = document.getElementById(tel)
        if (nome != "" && email != "" && tel !="") {
            document.getElementById('entrar').style.backgroundColor = 'green';
        }
        else{
            document.getElementById('entrar').style.backgroundColor = 'blue';
        }
    </script>

</html>