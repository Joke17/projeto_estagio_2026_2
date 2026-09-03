<?php
    include_once 'rb/conexao.php';

    $compra = R::load('anuncios', $_GET['id']);
    $compra->status = 'Solicitado';
    R::store($compra);

    header('Location:index.php?solicitacao=true');
    
?>