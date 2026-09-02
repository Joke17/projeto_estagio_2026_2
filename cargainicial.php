<?php

    include_once 'rb/conexao.php';

    $usuarios = R::findAll('usuarios');

    if($usuarios == null){
        $usuarios = R::dispense('usuarios');
        $usuarios->nome = 'root';
        $usuarios->senha = 'qwerty';

        $id = R::store($usuarios);
    }
    header('Location:index.php');

?>