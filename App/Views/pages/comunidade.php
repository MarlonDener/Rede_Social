<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/comunidade.css" rel="stylesheet">


</head>

<body>

	<section class="main-feed">

		<?php include("includes/sidebar.php")?>

		<div class="feed">
			<div class="comunidade">
				<div class="container-comunidade">
					<h4>Amigos</h4>
					<div class="container-comunidade-wraper">
						<?php
						 $values = \App\Models\UsuariosModels::listarAmigos();
						foreach ($values as $key => $value) {
						  			 ?>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar-placeholder.png" />
							</div>
							<div class="info-comunidade-user-single">
								<h2><?= $value['nome']?></h2>
								<p><?= $value['email']?></p>
							</div>

						</div>
					<?php }?>
											</div>
				</div>

				<div class="container-comunidade">
					<h4>Comunidade</h4>
					<div class="container-comunidade-wraper">
						<?php $comunidade = \App\Models\ComunidadeModels::listarComunidade();
						foreach ($comunidade as $value) {
							if($value['id'] == $_SESSION['id']){
								continue;
							}
							$pdo = \App\mysql::conectar();
							$verificar = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ? AND status = 1) OR (enviou = ? AND recebeu = ? AND status = 1)");
							$verificar->execute(array($value['id'],$_SESSION['id'],$_SESSION['id'],$value['id']));
							if($verificar->rowCount() == 1){
								continue;
							}

							if(\App\Models\ComunidadeModels::existePedidoEnviado($value['id'])){
								$mostrar = true;
							}else{
								$mostrar = false;
							}
							?>	

							<div class="container-comunidade-single">
								<div class="img-comunidade-user-single">
									<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
								</div>
								<div class="info-comunidade-user-single">
									<h2><?php echo $value['nome']?></h2>
									<div class="btn-solicitar-amizade">

										<?php if($mostrar){?>
											<a href="<?php echo INCLUDE_PATH ?>comunidade?sendInvitation=<?= $value['id']?>">Solicitar Amizade</a>
										<?php }else{?>
											<a href="javascript:void(0)">Cancelar pedido</a>
										<?php }?>
									</div>
								</div>					
							</div><!--bloco de cada amigo-->
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!--feed-->

	</section>


</body>


</html>