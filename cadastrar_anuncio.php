<?php

    include_once 'rb/conexao.php';

    // $anuncio = R::findAll('carros_anunciados');

    $anuncio = R::dispense('anuncios');
    $anuncio->nome_proprietario = $_GET['nome_proprietario'];
    $anuncio->email = $_GET['email'];
    $anuncio->telefone = $_GET['telefone'];
    $anuncio->cpf = $_GET['cpf'];
    $anuncio->limite_venda = $_GET['limite_venda'];
    $anuncio->marca = $_GET['marca'];
    $anuncio->modelo = $_GET['modelo'];
    $anuncio->ano = $_GET['ano'];
    $anuncio->preco = $_GET['preco'];
    $anuncio->status = "Pendente";

    $id = R::store($anuncio);
    
    header('Location:anunciar.php?anunciado=true');

?>