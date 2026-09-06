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
        <div class="btn-voltar"><a href="#" onclick="history.back(); return false;">Voltar</a></div> 
        <?php 
            include_once 'include/cabecalho.php';
        ?>
    </header>
    <main>
        <h1>Anuncie seu carro</h1>
        <form action="cadastrar_anuncio.php" method="get" class="form-card">
            <!-- dados para contato  -->
            <label for="">Dados para contato e venda</label>
            <label for="nome_proprietario">Nome: </label>
            <input type="text" name="nome_proprietario" id="nome_proprietario"><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>
            <label for="telefone">Telefone Celular: </label>
            <input type="text" name="telefone" id="telefone"><br>
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf"><br>
            <label for="limite_venda">Deseja vender até no máximo que data</label>
            <input type="date" name="limite_venda" id="limite_venda"><br>


            <!-- formulario de cadastro do carro -->
             <label for="marca">Marca: </label>
             <input type="text" id="marca" name="marca"><br>
             <label for="modelo">Modelo: </label>
             <input type="text" id="modelo" name="modelo"><br>
             <label for="ano">Ano: </label>
             <input type="text" id="ano" name="ano"><br>
             <label for="preco">Preço: </label>
             <input type="text" name="preco" id="preco"><br>

             <input type="submit" value="Anunciar" class="input-aunciar">
             
        </form>
        <?php if(isset($_GET['anunciado'])): ?>
            <div class="toast toast-sucesso" id="toast">
                Anuncio enviado para análise com sucesso!
                <span class="toast-fechar" onclick="document.getElementById('toast').remove()">×</span>
            </div>
        <?php endif; ?>
    </main>
    <footer>
        <?php 
            include_once 'include/rodape.php';
        ?>
    </footer>
    <script>
        const toast = document.getElementById('toast');
        if (toast) {
            setTimeout(() => toast.remove(), 4000);
        }
    </script>
</body>
</html>