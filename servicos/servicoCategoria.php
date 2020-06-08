<?php



function defineCategoria (string $nome, string $idade) : ?string
{
$categorias = array('infantil', 'adolescente', 'adulto');
    if (validaNome($nome) && validaIdade($idade))
    {
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemValida ('O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
                    return null;
                }
               
            }
        }
        else if($idade >=13 && $idade <=  18)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemValida ('O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemValida ('O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    { 
      obterMensagemErro();
      return null;
    }
} 


