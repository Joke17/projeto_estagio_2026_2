<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncio</title>
</head>
<body>
    <header>
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
                    <p>Nome do proprietário: %s</p>
                    <p>Telefone: %s</p>
                    <p>Marca: %s</p>
                    <p>Modelo: %s</p>
                    <p>Ano: %s</p>
                    <p>Preço: %s</p>
                           
AAA;

            $form = <<<AAA
        <form action="carregasolicitacao.php?id=%s" method="get">
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