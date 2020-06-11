<!DOCTYPE| html>
<html>

<head>
	<meta charset="utf-8">
	<title>Controle de vendas</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device width, initial scale=1">
</head>

<body>
<?php

class opvenda
{
    private $data;
    private $produto;
    private $quantidade;
    private $total;

    public function __construct ($data, $produto, $quantidade, $total)
    {
        $this->data=$data;
        $this->produto=$produto;
        $this->quantidade=$quantidade;
        $this->total=$total;
    }   
    public function pegavar()
    {
        var_dump(get_object_vars($venda1));
    }

    public function mostraVenda ()
    {
        echo '<h1>Venda realizada</h1>';
        echo '<p>Data:' . $this->data .'</p>';
        echo '<p>Produto:' . $this->produto .'</p>';
        echo '<p>Quantidade:' . $this->quantidade .'</p>';
        echo '<p>Total:' . $this->total .'</p>';
    }
   
}

function listaVendas ()
{ 
   opvenda::pegavar();
   opvenda::mostraVenda();
        return;
}

$venda1 = new opvenda( 
    '10/12/1201', 
    'Escova de Cabelo',
    '1', 
    '10.00');
$venda2 = new opvenda( 
    '20/01/2019', 
    'Gel de cabelo',
    '2', 
    '50.00');

echo $venda2->mostraVenda();
listaVendas();
print_r($venda1);
//listaVendas($dados);
echo '<br>';
$venda1->pegavar();




?>
</body>
