<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">

	<title></title>
</head>
<body>
	<div class="container">
	<h1>Consulta de cliente</h1>
	<hr>
	<form action="consulte.php" method="get"/>
		
		<a href="broto.php" class="btn btn-danger">Voltar</a>
		<br><br>
		Nome:
		<input type="text" name="nome"/>
		<input type="submit" value="PESQUISAR"/>

	</form>
	<?php
	//isset --> SE EXISTE
	if(isset($_GET["nome"])){
		$nome = $_GET["nome"];
		//abrir conexão com o banco
		include_once 'conex.php';

		$sql = "select * from cliente where nome like'".$nome."%'";

		//mysql_query exeuta o sql no banco
		$resultado = mysqli_query($con,$sql);
		if(mysqli_num_rows($resultado) >0){

			
			//sair do php
			?>
			<br>
				<table width="900px" border="1px">
					<tr>
						<td>Nome</td>
						<td>Telefone</td>
						<td>Endereço</td>
						<td>Sabor</td>
						<td>Tamanho</td>
						

					</tr>
			 <?php // Criar uma tabela de consulta ao cliente
			 while($row = mysqli_fetch_array($resultado)) {?>
			 	<tr>
			 		<td><?php echo $row["nome"]; ?></td>
			 		<td><?php echo $row["telefone"]; ?></td>
			 		<td><?php echo $row["endereco"]; ?></td>
			 		<td><?php echo $row["sabor"]; ?></td>
			 		<td><?php echo $row["tamanho"]; ?></td>
			 	</tr>
			 	<?php
			 }//fim do while


			 	
		}else{
			echo"Nenhum cliente encontrado!";
		}
	}

	?>
	</div>
</body>
</html>