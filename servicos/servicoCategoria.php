<?php



function defineCategoria (string $nome, string $idade) : ?string
{
$categorias = array('infantil', 'adolescente', 'adulto');
    if (validaNome($nome) && validaIdade($idade))
    {
        if($idade >= 6 && $idade <= 12)
        {
            $i = 0;
            setarMensagemValida ($nome, $categorias[$i]);
            return null;
        }
        else if($idade >=13 && $idade <=  18)
        {
            $i = 1;
            setarMensagemValida ($nome, $categorias[$i]);
            return null;
        }
        else
        {
            $i = 2;
            setarMensagemValida ($nome, $categorias[$i]);
            return null;
        }
    }
    else
    { 
      obterMensagemErro();
      return null;
    }
} 


