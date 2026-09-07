<?php
    include_once 'testasessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
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
        <div class="btn-voltar"><a href="#" onclick="history.back(); return false;">Voltar</a></div>  
    </header>
    <main>
        <?php 
            include_once 'rb/conexao.php';

            //carrega do bd o anúncio selecionado na tela anterior, e seu possível comprador respectivo
            $anuncio = R::findOne('anuncios', 'id = ?', [$_GET['id']]);
            $data_limite_formatada = date('d/m/Y', strtotime($anuncio->limite_venda));
            $data_criacao_formatada = date('d/m/Y H:i', strtotime($anuncio->criado_em));
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
                        <strong><p>Criado em:</strong> %s</p>
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
                $data_limite_formatada,
                $anuncio->marca,
                $anuncio->modelo,
                $anuncio->ano,
                $anuncio->preco,
                $anuncio->status,
                $data_criacao_formatada
            );

            //verifica se tratar da aprovação de uma venda, e se for o caso, mostra também os dados co comprador
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

            //verificação se a aprovação é de uma venda ou de um anuncio, para passar corretamente os parametros
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