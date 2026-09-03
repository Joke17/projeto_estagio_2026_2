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
                    <p>Email: %s</p>
                    <p>Telefone: %s</p>
                    <p>CPF: %s</p>
                    <p>Limite para Venda: %s</p>
                    <p>Marca: %s</p>
                    <p>Modelo: %s</p>
                    <p>Ano: %s</p>
                    <p>Preço: %s</p>
                    <p>Status: %s</p>
                           
AAA;
            $linksaprovacao = "<p><a href=\"carregaanuncio.php?aprovado=true&id=%s\">Aprovar</a> <a href=\"carregaanuncio.php?reprovado=true&id=%s\">Rejeitar</a></p></div>";

            printf(
                $carroparaaprovar,
                $anuncio->nome_proprietario,
                $anuncio->email,
                $anuncio->telefone,
                $anuncio->cpf,
                $anuncio->limite_venda,
                $anuncio->marca,
                $anuncio->modelo,
                $anuncio->ano,
                $anuncio->preco,
                $anuncio->status
            );
            printf(
                $linksaprovacao,
                $anuncio->id,
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