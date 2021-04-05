<?php
namespace App\Controllers;

class ComunidadeController{
	public function index(){
	if(isset($_SESSION['login'])){	
		if(isset($_GET['sendInvitation'])){
		$idTo = (int)$_GET['sendInvitation'];
		if(\App\Models\ComunidadeModels::solicitarAmizade($idTo)){
			\App\Utilidades::alert("Enviado");
			\App\Utilidades::redirect(INCLUDE_PATH.'comunidade');
		}else{
			\App\Utilidades::alert("Convite já Enviado");			
		\App\Utilidades::redirect(INCLUDE_PATH.'comunidade');
		}
	 }


	\App\Views\MainView::render("comunidade");
	}else{
		\App\Utilidades::redirect(INCLUDE_PATH);		
	}

	if(isset($_GET['sair'])){
		session_destroy();
		session_unset();
		\App\Utilidades::redirect(INCLUDE_PATH);
		}	

	}
}


?>