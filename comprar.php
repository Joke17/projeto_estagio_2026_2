<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
    <header>
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
                $card_carros = <<<AAA
                <div class="">
                    
                    <div class=""><p>Marca: %s - Modelo: %s - Ano: %s</p></div>
                    <div class=""><p><a href="finalizacompra.php?id=%s">Ver mais</a></p></div>
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