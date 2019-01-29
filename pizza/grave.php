<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// pegar os dados do cadastro
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$sabor = $_POST["sabor"];
	$tamanho = $_POST["tamanho"]; //padrão de banco

	// Montar a instrção de Gravação
	$sql = "insert into cliente values(null,'".$nome."','".$telefone."','".$endereco."','".$sabor."','".$tamanho."')";
	//abrir a conexao com o banco
	include_once 'conex.php';
	if (mysqli_query($con,$sql)) {
		$msg = "Gravado com sucesso!";
	}else{
		$msg = "Erro ao gravar";
	}
	mysqli_close($con); // Direcionando de volta para a página de início.
	echo "<script>alert('".$msg."');location.href='broto.php';</script>";
	?>
</body>
</html>