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
	<p>Página de login</p>
	<br/>
		
	<?php
		include('seguranca.php');

	?>
	<form method="post" action="valida.php">
		<label>Usuário: </label>
		<input id="usuario" type="text" name="usuario" maxlength="50" /><br/><br/>
		<label>Senha:</label>
		<input id="senha" type="password" name="senha" maxlength="50" /><br/><br/>
		<input id="entrar" type="submit" value="Entrar" />
	</form>
</body>
</html>