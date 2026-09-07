<?php
    //para impedir o acesso sem login, verifica se a função exites, se não existir, não deixa acessar as áreas de admin, e retorna pro index
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?logininvalido=true');
    }
?>