<?php
    date_default_timezone_set('America/Sao_Paulo');
    include_once 'rb-mysql.php';

    R::setup(
        'mysql:host=127.0.0.1;dbname=loja_de_carros',
        'root',
        ''
    )
?>