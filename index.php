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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        div{
            text-align: center;
        }
        body {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
    </style>

</head>
<body>
    <header>
        <?php 
            include_once 'include/cabecalho.php';

            // if(isset($_GET['logininvalido'])){
            //     echo $_SESSION['usuario'];
            // }

        ?>
    </header>
    <main>
        <div>
            <h3>O que você deseja fazer hoje?</h3>

            <br><br>

            <div class="btn-acao"><a style="color: white;" href="comprar.php">Comprar um carro</a></div>
            <br>
            <div class="btn-acao"><a style="color: white;" href="anunciar.php">Vender um carro</a></div>

            <br><br>
            <hr>

            <p>Somente para colaboradores</p>
            <div class="btn-entrar"><a href="tela_login.php">Entrar</a></div>

        </div>
    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
</body>
</html>