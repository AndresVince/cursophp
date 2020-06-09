<?php

function validaNome (string $nome) : bool
{    
    $message=array("O nome não pode ser vazio, por favor preencha corretamente", "O nome é muito extenso", "O nome deve conter mais que 3 caracteres");
    if(empty($nome)) 
    {
        setarMensagemErro ($message[0]);
        removerMensagemValida();
        return false;
        //header('Location: index.php'); 	
    }
    else if (strlen($nome) > 40) 
    {
        setarMensagemErro ($message[1]);
        removerMensagemValida();
        return false;
    }
    else if(strlen($nome) <= 3)
    { 
        setarMensagemErro ($message[2]);
        removerMensagemValida();
        return false;
    }
    removerMensagemErro();
    return true;
} 

function validaIdade (string $idade) : bool
{
    $messag=array("A idade não pode ser vazia, por favor preencha corretamente", "A entrada ".$idade." contém caracteres. Por favor, insira uma idade válida", $idade. " não é uma idade válida. Por favor, insira a idade correta","ultimo");
    if(empty($idade))
    {
        setarMensagemErro ($messag[0]);
        removerMensagemValida();
        return false;
    }
    else if(!is_numeric($idade))
    {
        setarMensagemErro ($messag[1]);
        removerMensagemValida();
        return false;
    }
    else if($idade > 110 OR $idade < 6)
    {		
        setarMensagemErro ($messag[2]);
        removerMensagemValida();
        return false;
    }
    removerMensagemErro();
    return true;
}

