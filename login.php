<?php

    

    include_once "rb/conexao.php";

    $users = R::findAll('usuarios');
    $valido = 'false';

    foreach($users as $user_login){
        if($user_login['usuario'] == $_GET['usuario']){
            if($user_login['senha'] == $_GET['senha']){
                $valido = 'true';
                session_start();
                $_SESSION['usuario'] = $_GET['usuario'];
            }
        }
    }

    if($valido == 'true'){
        header('Location: aprovar.php');
        exit;
    } else {
        header('Location: tela_login.php?usuario=null');
        exit;
    }

?>