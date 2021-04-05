<!DOCTYPE html>
<html>
<head>
	<title>Login na Rede Social</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_STATIC?>styles/style.css">
</head>
<body>

	<div class="sidebar"></div>

	<div class="form-container-login">
		<div class="logo-chamada-login">
			<div class="logo-text">Marlon Dener</div>
			<p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social Marlon Dener</p>
		</div>	

		<div class="form-login">
			<form method="post">
				<input type="text" name="email">
				<input type="password" name="senha">
				<input type="submit" name="login" value="Logar">
			</form>
			<a href="<?php echo INCLUDE_PATH?>registrar">Criar conta</a>
		</div><!--form-login-->	

	</div><!--form-->	

</body>
</html>