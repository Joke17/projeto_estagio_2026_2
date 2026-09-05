<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;   /* centraliza horizontalmente */
            align-items: center;       /* centraliza verticalmente */
            min-height: 100vh;         /* garante que ocupe a tela toda, mesmo com pouco conteúdo */
            margin: 0;
            background: grey;
        }
        .login{
            margin: 12% auto;
            text-align: center;
            border: black 2px solid;
            border-radius: 20px;
            width: 300px;
            padding: 5%;
            background-color: white !important;
        }
    </style>
</head>
<body>
    <header>
    </header>
    <main>
        
        <div class="login" style="background-color: white;">
            <form action="login.php" method="get">
                <label for="usuario">Usuario: </label>
                <input type="text" id="usuario" name="usuario"><br><br>
                <label for="senha">Senha: </label>
                <input type="text" id="senha" name="senha"><br><br>
                <input type="submit" value="Entrar">
            </form>
            <br>
        </div>
        <!-- <a href="index.php">Voltar</a> -->
    </main>
    <footer>
    </footer>
</body>
</html>