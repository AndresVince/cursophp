<?php

Function validaUser(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        throw new Exception("O campo não pode estar vazio");
    }

    return true;
}

$usuario = [
    'codigo' => 'nois',
    'nome' => 'Yeu',
    'idade'=> 23,
];
$status = false;
try {
    $status = validaUser($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
} finally {
    echo "<br>\nStatus da operacao: ". (bool)$status . PHP_EOL;
}

echo "\n<br>**************    LOGADO   ****************\n";
