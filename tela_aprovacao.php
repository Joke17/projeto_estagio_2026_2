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
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <?php 
            include_once 'rb/conexao.php';

            $anuncio = R::findOne('anuncios', 'id = ?', [$_GET['id']]);
            $comprador = R::findOne('compras', 'anuncio = ?', [$_GET['id']]);

            $carroparaaprovar = <<<AAA
                <div>
                    <h2 style="text-align: center;">Aprovação Pendendte </h2>
                    <div class="aprovacao">
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
                    </div>
                           
AAA;

            $linksaprovacao = "<p style=\"text-align: right;\"><a href=\"edita_anuncio.php?tipo=%s&aprovado=true&id=%s\">Aprovar</a> <a href=\"edita_anuncio.php?tipo=%s&reprovado=true&id=%s\">Rejeitar</a></p></div>";
            $tipo = 'anuncio';
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

            if(isset($_GET['Vendas'])){
                $tipo = 'venda';                
                $infoscomprador = <<<AAA
                    <div class="aprovacao" style="margin: 10px auto">
                        <h3>Comprador</h3>
                        <p>Nome do comprador: %s</p>
                        <p>Email: %s</p>
                        <p>Telefone: %s</p>
                    </div>
AAA;                
                printf(
                    $infoscomprador,
                    $comprador->nome,
                    $comprador->email,
                    $comprador->telefone,
                );
            }

            printf(
                $linksaprovacao,
                $tipo,
                $anuncio->id,
                $tipo,
                $anuncio->id
            );
        ?>



    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
</body>
</html>