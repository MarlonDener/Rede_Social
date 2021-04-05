<?php
namespace App;

class mysql
{	
	private static $pdo;
	public static function conectar(){
			if(self::$pdo == null){
			try{
				self::$pdo = new \PDO('mysql:host=localhost;dbname=rede_social.base', 'root','',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			echo '<h1 style="text-align:center; padding-top:30px; font-weight:300; border-bottom:1px solid black;">Erro ao conectar</h1>';
		}

}

return self::$pdo;

	}

}


?>