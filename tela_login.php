<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <? include_once 'include/cabecalho.php'; ?>
    </header>
    <main>
        <form action="login.php" method="get">
            <label for="usuario">usuario: </label>
            <input type="text" id="usuario" name="usuario">
            <label for="usuario">Senha: </label>
            <input type="text" id="senha" name="senha">
            <input type="submit" value="Entrar">
        </form>
    </main>
    <footer>
        <? include_once 'include/rodape.php';?>
    </footer>
</body>
</html>