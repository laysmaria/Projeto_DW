
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		body{
			margin: 5px;
			padding: 0px;
			font-family: "calibre";
		}
			form{
			border-color: black;
		}
		#usuario{
			height: 25px;
			width: 250px;
			border: none;
			border-radius: 5px;
			background-color: #DCDCDC;
		}


		#senha{
			height: 25px;
			width: 250px;
			border: none;
			border-radius: 5px;
			background-color: #DCDCDC;
		}

		#cadastrar{
			height: 25px;
			width: 100px;
			border: none;
			border-radius: 4px;
			background-color: #EFEFEF;
			border: 1px solid #CCC;
		}

	</style>
</head>
<body>
	<p>Página de cadastro</p>
	<br/>
	<?php
		require_once('seguranca.php');


		if(isset($_POST['Cadastrar'])){
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
			$sql_inserir = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
				if(inserir($sql_inserir)){
					echo 'Usuário cadastrado com sucesso. ID: '.mysql_insert_id();
					unset ($_POST['Cadastrar']);
				}else{
					echo 'Erro ao cadastrar usuário: '.mysql_error();
				}
		}
	?>

		
	<form  method="POST" enotype="multipart/form-data" action="">
		<p>Usuário: <input id="usuario" type="text" name="usuario"/></p><br/>
		<p>Senha: <input id="senha" type="password" name="senha"/></p><br/>
		<input id="cadastrar" type="submit" name="Cadastrar" value="Cadastrar"/>
	</form>

</body>
</html>