<?php

    session_start();

    include_once "rb/conexao.php";

    $usuario = R::findAll('usuarios');
    $valido = 'false';

    // foreach($users as $user_login){
    //     if($user_login['nome'] == $_GET['usuario']){
    //         if($user_login['senha'] == $_GET['senha']){
    //             // $valido = 'true';
                
    //             $_SESSION['usuario'] = $_GET['usuario'];
    //         }
    //     }
    // }

           foreach ($usuario as $user) {
            if($user['nome'] == $_GET['nome']){
                if($user['senha'] == $_GET['senha']){
                    $_SESSION['usuario'] = $_GET['usuario'];
                }
            }
        }

    if(isset($_SESSION['usuario'])){
        header('Location: aprovar.php');
        // exit;
    } else {
        session_destroy();
        header('Location: tela_login.php?usuario=null');
        // exit;
    }

?>