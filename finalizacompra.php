<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Anuncio</title>
</head>
<body>
    <header>
        <div class="btn-voltar"><a href="#" onclick="history.back(); return false;">Voltar</a></div> 
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <?php 
            include_once 'rb/conexao.php';

            $anuncio = R::findOne('anuncios', 'id = ?', [$_GET['id']]);

            $carroparaaprovar = <<<AAA
                <div>
                    <divclass="aprovacao dados-anuncio">
                        <strong><p>Nome do proprietário:</strong> %s</p>
                        <strong><p>Telefone:</strong> %s</p>
                        <strong><p>Marca:</strong> %s</p>
                        <strong><p>Modelo:</strong> %s</p>
                        <strong><p>Ano:</strong> %s</p>
                        <strong><p>Preço:</strong> %s</p>
                    </div>
                           
AAA;

            $form = <<<AAA
        <form action="carregasolicitacao.php?id=%s" method="get" class="form-card">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>
            <label for="tel">Telefone: </label>
            <input type="text" name="tel" id="tel"><br>
            <input type="hidden" name="id" value="$anuncio->id">
            <input type="submit" value="Solicitar Compra">
         </form>
AAA;

            // $linksaprovacao = "<p><a href=\"carregasolicitacao.php?id=%s\">Solicitar compra</a></p></div>";

            printf(
                $carroparaaprovar,
                $anuncio->nome_proprietario,
                $anuncio->telefone,
                $anuncio->marca,
                $anuncio->modelo,
                $anuncio->ano,
                $anuncio->preco,
            );
            printf(
                $form,
                $anuncio->id,
            )
        ?>

         
    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
</body>
</html>