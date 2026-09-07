<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            /* centraliza horizontalmente */
            align-items: center;
            /* centraliza verticalmente */
            min-height: 100vh;
            /* garante que ocupe a tela toda, mesmo com pouco conteúdo */
            margin: 0;
            background: grey;
        }

        .login {
            margin: 12% auto;
            text-align: center;
            border: black 2px solid;
            border-radius: 20px;
            width: 300px;
            padding: 5%;
            background-color: white !important;
        }

        .form-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08);
            padding: 24px;
            max-width: 600px;
            margin: 24px auto;
        }

        .form-card label {
            display: block;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .form-card input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 16px;
            font-family: inherit;
        }

        /* Variação específica pro login */
        .form-card--login {
            max-width: 380px;
        }
        .toast {
            position: fixed;
            top: 24px;
            left: 50%;
            transform: translateX(-50%);
            padding: 14px 24px;
            border-radius: 8px;
            color: #fff;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            animation: toast-vida 4s forwards;
        }

        .toast-sucesso {
            background-color: #1a7a1a;
        }

        .toast-erro {
            background-color: #d32f2f;
        }

        @keyframes toast-vida {
            0%   { opacity: 0; transform: translate(-50%, -20px); }
            10%  { opacity: 1; transform: translate(-50%, 0); }
            85%  { opacity: 1; }
            100% { opacity: 0; transform: translate(-50%, -20px); }
        }
    </style>
</head>

<body>
    <header>
    </header>
    <main>

        <div class="login" style="background-color: white;">
            <h2>Login</h2>
            <form action="login.php" method="get" class="form-card form-card--login">
                <label for="usuario">Usuario: </label>
                <input type="text" id="usuario" name="usuario"><br><br>
                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="senha"><br><br>
                <input type="submit" value="Entrar">
            </form>
            <br>
            <!-- <a href="#" onclick="history.back(); return false;">Voltar</a>  -->
        </div>
        <!-- <a href="index.php">Voltar</a> -->
        <?php if(isset($_GET['usuario'])): ?>
            <div class="toast toast-erro" id="toast">
                Login ou senha inválidos.
                <span class="toast-fechar" onclick="document.getElementById('toast').remove()">×</span>
            </div>
        <?php endif; ?>
    </main>
    <footer>
    </footer>
    <script>
        const toast = document.getElementById('toast');
        if (toast) {
            setTimeout(() => toast.remove(), 4000);
        }
    </script>
</body>

</html>