<?php
    include_once 'rb/conexao.php';

    $anuncio = R::load('anuncios', $_GET['id']);

    if(isset($_GET['aprovado'])){
        $anuncio->status = 'Aprovado';
        R::store($anuncio);
        header('Location:aprovar.php?aprovado=true');
        
    } else if(isset($_GET['reprovado'])){ 
        $anuncio->status = 'Reprovado';
        R::store($anuncio);
        header('Location:aprovar.php?reprovado=true');
    }
    
?>