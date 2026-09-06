<?php
    include_once 'testasessao.php';
?>

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
        <a href="#" onclick="history.back(); return false;">Voltar</a> 
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
                <div class="">
                    <h2 style="text-align: center;">Aprovação Pendente </h2>
                    <div class="aprovacao dados-anuncio">
                        <strong><p>Nome do proprietário:</strong> %s</p>
                        <strong><p>Email:</strong> %s</p>
                        <strong><p>Telefone:</strong> %s</p>
                        <strong><p>CPF:</strong> %s</p>
                        <strong><p>Limite para Venda:</strong> %s</p>
                        <strong><p>Marca:</strong> %s</p>
                        <strong><p>Modelo:</strong> %s</p>
                        <strong><p>Ano:</strong> %s</p>
                        <strong><p>Preço:</strong> %s</p>
                        <strong><p>Status:</strong> %s</p>
                    </div>
                           
AAA;

            $linksaprovacao = <<<AAA
                                
                                <div class="btnsapr">
                                    <div class="btn-aprovar"><a href="edita_anuncio.php?tipo=%s&aprovad%s=true&id=%s">Aprovar</a></div>
                                    <div class="btn-rejeitar"><a href="edita_anuncio.php?tipo=%s&reprovad%s=true&id=%s">Rejeitar</a></div>
                                </div>
                                
                                </div>
AAA;
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
                <br><br>
                <h3>Dados do Comprador</h3>
                    <div class="aprovacao dados-anuncio" style="margin: 10px auto">
                        <strong><p>Nome do comprador:</strong> %s</p>
                        <strong><p>Email:</strong> %s</p>
                        <strong><p>Telefone:</strong> %s</p>
                    </div>
AAA;                
                printf(
                    $infoscomprador,
                    $comprador->comprador,
                    $comprador->email,
                    $comprador->telefone,
                );
            }

            if($tipo == "venda"){
                $letra = 'a';
            } else {
                $letra = 'o';
            }

            printf(
                $linksaprovacao,
                $tipo,
                $letra,
                $anuncio->id,
                $tipo,
                $letra,
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