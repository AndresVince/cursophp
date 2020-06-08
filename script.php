<?php

session_start();
 
//$categorias[] = 'idoso';

//print_r($categorias);
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoria.php";
$nome = $_POST['nome'];
$idade = $_POST['idade'];
 
//var_dump($nome);
//var_dump($idade);

defineCategoria($nome, $idade);
header('location: index.php');
