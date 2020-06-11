<?php

Function divisao($var1,$var2)
{
    if ($var1 == 0 || $var2 == 0)
    {
        throw new Exception("A divisao por 0 eh impossivel");
    }
    return true;
}

$dados = [
    'numero1' => 6,
    'numero2' => 0,
];
$status = false;
$var1 = $dados['numero1'];
$var2 = $dados['numero2'];
try {
    $status = divisao($var1, $var2);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
} finally {
    echo "<br>\nDivisao: ". $var1 . " dividido por " . $var2 . " é " . $var1 / $var2;
}

echo "\n<br>**************    LOGADO   ****************\n";
