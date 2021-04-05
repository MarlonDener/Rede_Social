<?php
namespace App\Models;

class ComunidadeModels{
	public static function listarComunidade(){
		$pdo = \App\mysql::conectar();
		$comunidade = $pdo->prepare("SELECT * FROM usuarios");
		$comunidade->execute();
		return $comunidade->fetchAll();
	}

	public static function solicitarAmizade($idTo){
		$pdo = \App\mysql::conectar();
		$verificarAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
		$verificarAmizade->execute(array($_SESSION['id'],$idTo,$idTo,$_SESSION['id']));

		if($verificarAmizade->rowCount() == 0){
			$insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES(null,?,?,0)");
			$insertAmizade->execute(array($_SESSION['id'],$idTo));
			return true;
		}else{
			return false;
		}
	}

	public static function existePedidoEnviado($idTo){
		$pdo = \App\mysql::conectar();
		$verificarAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
		$verificarAmizade->execute(array($_SESSION['id'],$idTo,$idTo,$_SESSION['id']));
		if($verificarAmizade->rowCount() == 0){
			return true;
		}else{
			return false;
		}

	}

}

?>