<?php
    //para o log out, a variável usuário deixa de existir na sessão, e a sessão é destruída
    session_start();
    unset($_SESSION['usuario']);
    session_destroy();
    header('Location:index.php');
?>