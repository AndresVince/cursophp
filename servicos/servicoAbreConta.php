<!DOCTYPE| html>
<html>

<head>
	<meta charset="utf-8">
	<title>Formulário de inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device width, initial scale=1">
</head>

<body>
<?php

class ContaBancaria
{
    private $banco;
    private $titular;
    private $agencia;
    private $conta;
    private $saldo;     

    public function __construct ($banco, $titular, $agencia, $conta, $saldo)
    {
        $this->banco=$banco;
        $this->titular=$titular;
        $this->agencia=$agencia;
        $this->conta=$conta;
        $this->saldo=$saldo;

    }   

    public function obterSaldo ()
    {
      echo 'Seu saldo atual é: R$ ' .$this->saldo.',00';
    }

    public function depositar($valor)
    {
        echo '<p>Você depositou: R$ '.$valor.',00</p>';
        $this->saldo += $valor;
    }
    public function sacar($valor)
    {
        echo '<p>Você sacou: R$ '.$valor.',00</p>';
        $this->saldo -= $valor;
    }

}

$conta1 = new ContaBancaria( 
    'Caixa', 
    'Andres Vince',
    '0276', 
    '0723-1', 
    200.00);
$conta2 = new ContaBancaria( 
    'Banrisul', 
    'Eduardo Leite',
    '0001', 
    '0000675-1', 
    700.00);


//var_dump($conta);
echo $conta1->obterSaldo();
echo '<br>';
$conta1->depositar(1000.00);
echo $conta1->obterSaldo();
$conta1->sacar(360.00);
echo '<br>';
echo $conta1->obterSaldo();


?>
</body>
