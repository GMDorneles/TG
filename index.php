<?php
//chamar páginas 
$pagina = 'home';
if(isset($_GET['i'])){//isset — Informa se a variável foi iniciada
    $pagina = addslashes($_GET['i']);//trata string recebida  verificand o se existe m caracteres especiais
}
//carrega cabeçalho
include 'app/views/header.php';
//página escolhida pelo usuáio

switch ($pagina){
    case 'home':
        include 'app/views/home.php';
        break;
    case 'produtos':
        include 'app/views/produtos.php';
        break;

    default:
    include 'app/views/home.php';
    break;
}
//footrer
include 'app/views/footer.php';