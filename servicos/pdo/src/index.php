<?php
require 'produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'lista':
        echo '<h3>Produtos: </h3>';
        foreach ($produto->lista() as $value) {
        echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insere':
        $status = $produto->insere('Produto novo iserido pelo index.php');
        if(!$status) {
            echo "Nao foi possivel completar a operacao!";
            return false;
            }
        echo "Registro inserido com sucesso!"  ;
        break;
    
    case 'atualiza':
        $status = $produto->atualiza('Produto EDITADO pelo index.php', 33);
        if(!$status) {
            echo "Nao foi possivel atualizar o registro!";
            return false;
            }
        echo "Registro Alterado com sucesso!"  ;
        break;
        
    case 'deleta':
        $status = $produto->deleta($value['id']);
        if(!$status) {
            echo "Nao foi possivel completar a operacao!";
            return false;
            }
        echo "Registro Apagado com sucesso!"  ;
        break;
        // $produto->deleta($value['id']);
        break;
    
    case 'deletatudo':
        foreach ($produto->lista() as $value) {
            $produto->deleta($value['id']);
            }
        $produto->resetaid();
        break;
}