<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_STATIC?>styles/style.css">
</head>
<body>

	<div class="sidebar">s</div>

	<div class="form-container-login">
		<div class="logo-chamada-login">
			<div class="logo-text">Marlon Dener</div>
			<p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social Marlon Dener</p>
		</div>	


		<div class="form-login">
			<form method="post">
				<h3>Crie sua conta</h3>				
				<input type="text" name="nome" placeholder="Seu nome completo">
				<input type="text" name="email" placeholder="Seu email">
				<input type="password" name="senha" placeholder="Sua senha">			
				<input type="password" name="senha2" placeholder="Confirme a sua senha>">
				<input type="submit" name="registrar" value="Logar">
			</form>
			<a href="<?php echo INCLUDE_PATH?>registrar">Entrar</a>
		</div><!--form-login-->	
	</div>


</body>
</html>