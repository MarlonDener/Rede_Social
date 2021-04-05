<?php
namespace App\Controllers;


class HomeController
{
	
	public function index(){
		if(isset($_GET['sair'])){
			session_destroy();
			session_unset();
			\App\Utilidades::redirect(INCLUDE_PATH);
		}
		if(isset($_GET['notFriend'])){
			$idEnviou = (int)$_GET['notFriend'];
			\App\Models\UsuariosModels::atualizarPedidoAmizade($idEnviou,0);
			\App\Utilidades::alert('Recusou');
			
		}else if(isset($_GET['accFriend'])){
			$idEnviou = (int)$_GET['accFriend'];
			if(\App\Models\UsuariosModels::atualizarPedidoAmizade($idEnviou,1)){;
			\App\Utilidades::alert('aceitou');
		}else{
			\App\Utilidades::alert('Ops, ocorreu um erro');
			\App\Utilidades::redirect(INCLUDE_PATH);
		}
		}

		if(isset($_SESSION['login'])){
			\App\Views\MainView::render("home");
		}else{

		if(isset($_POST['login'])){
		$login = strip_tags($_POST['email']);
		$senha = strip_tags($_POST['senha']);

		$verifica = \App\mysql::conectar()->prepare("SELECT * FROM usuarios WHERE email = ?");
		$verifica->execute(array($login));

		if($verifica->rowCount() == 0){
			\App\Utilidades::alert("Email não encontrado, verifique o campo");
			return false;
		}else{
			$dados = $verifica->fetch();
			$senhaBanco = $dados['senha'];
			if(\App\Bcrypt::check($senha,$senhaBanco)){
			$_SESSION['login'] = $dados['email'];
			$_SESSION['nome'] = explode(' ',$dados['nome'])[0];
			$_SESSION['id'] = $dados['id'];
			\App\Utilidades::alert("Bem vindo a nossa rede!");
			\App\Utilidades::redirect(INCLUDE_PATH);
		}else{			
			\App\Utilidades::alert("Senha incorreta!");			
			\App\Utilidades::redirect(INCLUDE_PATH);
		}//wrong password
			}

		}
			\App\Views\MainView::render("login");
	}
}

}



?>