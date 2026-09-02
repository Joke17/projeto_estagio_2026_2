<?php
if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <div>
            <h3>O que você deseja fazer hoje?</h3>

            <a href="comprar.php">Comprar um carro</a>
            <br>
            <a href="anunciar.php">Vender um carro</a>

            <p>Somente para colaboradores</p>
            <a href="tela_login.php">Entrar</a>

        </div>
    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
</body>
</html>