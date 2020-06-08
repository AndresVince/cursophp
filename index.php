<?php
include "servicos/servicoMensagemSessao.php"
?>
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
<h3>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</h3>
<form action="script.php" method="post">
		<?php
		$mensagemValida = obterMensagemValida();
		if(!empty($mensagemValida))
		{
			echo $mensagemValida;
		}
		$mensagemDeErro = obterMensagemErro();
		if(!empty($mensagemDeErro))
		{
			echo $mensagemDeErro;
		}
		?>
		<p>Seu nome: <input type="text" name="nome"  /></p>
		<p>Sua idade: <input type="text" name="idade" /></p>
		<p><input type="submit" value="Enviar" /></p>
</form>
</body>
</html>
