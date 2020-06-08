<?php
function validaNome (string $nome) : bool
{
    if(empty($nome)) 
    {
        setarMensagemErro ('O nome não pode ser vazio, por favor preencha corretamente');
        removerMensagemValida();
        return false;
        //header('Location: index.php'); 	
    }
    else if (strlen($nome) > 40) 
    {
        setarMensagemErro ('O nome é muito extenso');
        removerMensagemValida();
        return false;
    }
    else if(strlen($nome) <= 3)
    { 
        setarMensagemErro ('O nome deve conter mais que 3 caracteres');
        removerMensagemValida();
        return false;
    }
    removerMensagemErro();
    return true;
} 

function validaIdade (string $idade) : bool
{
    if(empty($idade))
    {
        setarMensagemErro ('A idade não pode ser vazia, por favor preencha corretamente');
        removerMensagemValida();
        return false;
    }
    else if(!is_numeric($idade))
    {
        setarMensagemErro ('A entrada '.$idade.' contém caracteres. Por favor, insira uma idade válida');
        removerMensagemValida();
        return false;
    }
    else if($idade > 110 OR $idade < 6)
    {		
        setarMensagemErro ($idade. ' não é uma idade válida. Por favor, insira a idade correta');
        removerMensagemValida();
        return false;
    }
    removerMensagemErro();
    return true;
}

