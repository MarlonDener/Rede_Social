<?php
namespace App\Models;

class UsuariosModels{
	public static function emailExists($email){
		$pdo = \App\mysql::conectar();
		$verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
		$verificar->execute(array($email));
		if($verificar->rowCount() == 1){
			return true;
		}else{
			return false;
		} 
	}

	public function listarAmizadesPendentes(){
		$pdo = \App\mysql::conectar();
		$listarAmizadesPendentes = $pdo->prepare("SELECT * FROM amizades WHERE recebeu = ? AND status = 0");
		$listarAmizadesPendentes->execute(array($_SESSION['id']));
		return $listarAmizadesPendentes->fetchAll();
	}

	public static function getUsuarioById($id){

		$pdo = \App\mysql::conectar();
		$usuarios = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
		$usuarios->execute(array($id));
		return $usuarios->fetch();
	}

	public static function atualizarPedidoAmizade($enviou,$status){		
		$pdo = \App\mysql::conectar();
		if($status == 0){
			$del = $pdo->prepare("DELETE FROM amizades WHERE enviou = ? AND recebeu = ? AND status = 0");
			$del->execute(array($enviou,$_SESSION['id']));
		}else if($status == 1){
			$aceitarPedido = $pdo->prepare("UPDATE amizades SET status = 1 WHERE enviou =? AND recebeu = ?");
			$aceitarPedido->execute(array($enviou,$_SESSION['id']));
		}
		if($aceitarPedido->rowCount() == 1){
			return true;
		}else{
			return false;
		}
	}

	public static function listarAmigos(){
		$pdo = \App\mysql::conectar();
		$listarAmigos = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND status = 1) OR (recebeu = ? AND status = 1)");
		$listarAmigos->execute(array($_SESSION['id'],$_SESSION['id']));
		$listarAmigos = $listarAmigos->fetchAll();
		$amigosConfirmados = array();
		foreach ($listarAmigos as $key => $value) {
		
		if($value['enviou'] == $_SESSION['id']){
			$amigosConfirmados[] = $value['recebeu'];
		}else{
			$amigosConfirmados[] = $value['enviou'];
		}
		$listarAmigos = array();

	}

		foreach ($amigosConfirmados as $key => $value) {
		$listarAmigos[$key]['nome'] = self::getUsuarioById($value)['nome'];			
		$listarAmigos[$key]['email'] = self::getUsuarioById($value)['email'];	
		}

	return $listarAmigos;
	}

}

?>