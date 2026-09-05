<?php
    // include_once 'testasessao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>        
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <h1>Aprovações</h1>
        <?php 
            include_once "rb/conexao.php";
            
            echo "
            <div class=\"btn-acao\"><a href=\"aprovar.php?anuncios=true\">Aprovar anuncios</a></div>
            <br>
            <div class=\"btn-acao\"><a href=\"aprovar.php?vendas=true\">Aprovar vendas</a></div>";

                $cabecalho = <<<AAA
                <h2 style="text-align: center;">%s Pendentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Status</th>
                        </tr>
                </thead>
                <tbody>
AAA;

            $corpo = <<<AAA
            <tr>
                <td>%s</td>
                <td><a href="tela_aprovacao.php?%s=true&id=%s">%s</a></td>
                <td>%s</td>
                <td>%s</td>
            </tr>
AAA;
            $fim = <<<AAA
            </tbody>
            </table>
AAA;
            if(isset($_GET['anuncios'])){
                // $anuncios = R::findAll('anuncios');
                $anuncios = R::find('anuncios', 'status = ?', ['Pendente']);
                $aprven = "Anuncios";
                printf($cabecalho, $aprven);
                foreach($anuncios as $anuncio){
                    if($anuncio->status == 'Pendente'){
                        printf(
                            $corpo,
                            $anuncio->marca,
                            $aprven,
                            $anuncio->id,
                            $anuncio->modelo,
                            $anuncio->ano,
                            $anuncio->status
                        );                    
                    }

                }
                echo $fim;

            } else if(isset($_GET['vendas'])){
                $anuncios = R::find('anuncios', 'status = ?', ['Solicitado']);
                $aprven = "Vendas";
                printf($cabecalho, $aprven);
                foreach($anuncios as $anuncio){
                    if($anuncio->status == 'Solicitado'){
                        printf(
                            $corpo,
                            $anuncio->marca,
                            $aprven,
                            $anuncio->id,
                            $anuncio->modelo,
                            $anuncio->ano,
                            $anuncio->status
                        );                    
                    }

                }
                echo $fim;
            }
        
        ?>
    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
</body>
</html>