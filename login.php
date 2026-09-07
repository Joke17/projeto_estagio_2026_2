<?php

    session_start();

    include_once "rb/conexao.php";

    //carrega os usuários do banco e seta a validação como falso
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


        
    //confere se o usuário foi passado da página anterior para essa, e se ele veio em branco
    if((isset($_GET['usuario']) && $_GET['usuario'] != "")){
        foreach ($usuario as $user) {
            if($user['nome'] == $_GET['usuario']){
                if($user['senha'] == $_GET['senha']){
                    $_SESSION['usuario'] = $_GET['usuario']; //se o usuario e a senha estiverem no bd, a variável usuario é criada na sessão

                }
            }        
                    // exit;
        }
        
    } else { //caso a variável não seja criada, a sessão é destruída e o login é invalidado
        session_destroy();
        header('Location:tela_login.php?usuario=null');
        // exit;
    }

    if(isset($_SESSION['usuario'])){ //se a variável usuário existir o login é validado, se não, é invalidado
        header('Location:aprovar.php');        
    } else {
        session_destroy();
        header('Location:tela_login.php?usuario=null');
        // exit;
    }

?>