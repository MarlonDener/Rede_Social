<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?php echo $_SESSION['nome']?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_STATIC?>styles/feed.css">	
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

	<section class="main-feed">
		<?php include("includes/sidebar.php")?>
		<div class="feed">

			<div class="single-wraper">	

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>


				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>
				

				<div class="feed-single-post">
					<div class="feed-single-post-author">
						<div class="img-single-post-author">
							<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
						</div>
						<div class="feed-single-post-author-info">	
							<h3>Marlon Dener</h3>
							<p>00:12 20/02/2021</p>
						</div>
					</div>
					<div class="feed-single-post-content">
						<p>This is a exemple text, because i am learning english, and also programation</p>
					</div>
				</div>				

			</div><!--wraper-->

			<div class="friend-request-feed">
				<h3>Solicitações de amizade:</h3>

				<?php $usuarios = \App\Models\UsuariosModels::listarAmizadesPendentes();
					foreach ($usuarios as $key => $value) {
					$usuarioInfo = \App\Models\UsuariosModels::getUsuarioById($value['enviou']);
				?>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
					<div class="friend-request-single-info">
						<h3>Claudia</h3>
						<a href="<?php echo INCLUDE_PATH?>?accFriend=<?= $usuarioInfo['id']?>">Aceitar</a> | <a href="<?php echo INCLUDE_PATH?>?notFriend=<?= $usuarioInfo['id']?>">Recusar</a>
					</div>
				</div>
				<?php }?>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
					<div class="friend-request-single-info">
						<h3>Otávio da silva</h3>
						<a href="#">Aceitar</a> | <a href="#">Recusar</a>
					</div>
				</div>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
					<div class="friend-request-single-info">
						<h3>Otávio da silva</h3>
						<a href="#">Aceitar</a> | <a href="#">Recusar</a>
					</div>
				</div>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
					<div class="friend-request-single-info">
						<h3>Otávio da silva</h3>
						<a href="#">Aceitar</a> | <a href="#">Recusar</a>
					</div>
				</div>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC?>images/avatar-placeholder.png">
					<div class="friend-request-single-info">
						<h3>Otávio da silva</h3>
						<a href="#">Aceitar</a> | <a href="#">Recusar</a>
					</div>
				</div>

			</div>
		</section>	


	</body>


	</html>