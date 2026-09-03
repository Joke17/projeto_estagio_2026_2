<?php
    // include_once 'testasessao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            
            echo "<a href=\"aprovar.php?anuncios=true\">Aprovar anuncios</a><br><a href=\"aprovar.php?vendas=true\">Aprovar vendas</a>";

            if(isset($_GET['anuncios'])){
                $cabecalho = <<<AAA
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
                <td><a href="tela_anuncio.php?id=%s">%s</a></td>
                <td>%s</td>
                <td>%s</td>
            </tr>
AAA;
            $fim = <<<AAA
            </tbody>
            </table>
AAA;

            $anuncios = R::findAll('anuncios');
            echo $cabecalho;
            foreach($anuncios as $anuncio){
                if($anuncio->status == 'Pendente'){
                    printf(
                        $corpo,
                        $anuncio->marca,
                        $anuncio->id,
                        $anuncio->modelo,
                        $anuncio->ano,
                        $anuncio->status
                    );                    
                }

            }
            echo $fim;

            } else if(isset($_GET['vendas'])){

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