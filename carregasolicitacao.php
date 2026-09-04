<?php
    include_once 'rb/conexao.php';


    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['tel'])){

        $sol = R::load('anuncios', $_GET['id']);
        $sol->status = 'Solicitado';
        R::store($sol);        

        $compra = R::dispense('compras');
        $compra->comprador = $_GET['nome'];
        $compra->email = $_GET['email'];
        $compra->telefone = $_GET['tel'];
        $compra->anuncio = $_GET['id'];

        $id = R::store($compra);

        header('Location:index.php?solicitacao=true');        

    } else {
        header('Location:comprar.php?invalido=true');
    }




    
?>