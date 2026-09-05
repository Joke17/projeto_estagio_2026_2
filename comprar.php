<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Compras</title>
</head>
<body>
    <header>
         <a href="#" onclick="history.back(); return false;">Voltar</a> 
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <h1>Carros disponíveis</h1>

        <?php 
            include_once 'rb/conexao.php';

            $carros = R::findAll('anuncios');

            if($carros == null){
                echo '<h2>Sem carros disponiveis no momento</h2>
                        <a href="anunciar.php">Anuncie seu carro com a gente</a>';
            } else {
                //aqui vai o card pra ser printado com cada carro
                echo "<div class=\"lista-anuncios\">";
                $card_carros = <<<AAA
                    <div class="card-anuncio">
                            <strong><p>Marca:</strong> %s</p>
                            <strong><p>Modelo:</strong> %s</p>
                            <strong><p>Ano:</strong> %s</p>
                        <div class="btn-acao"><p><a href="finalizacompra.php?id=%s">Ver mais</a></p></div>
                    </div>
AAA;

                foreach($carros as $anunciado){
                    if($anunciado->status == 'Aprovado'){
                        printf(
                            $card_carros,
                            $anunciado->marca,
                            $anunciado->modelo,
                            $anunciado->ano,
                            $anunciado->id
                        );                        
                    }

                }
                echo "</div>";
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