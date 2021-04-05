<?php
namespace App;

class Utilidades{

	public static function redirect($url){
		echo '<script>window.location.href="'.$url.'"</script>';
	}
	public static function alert($mensagem){
		echo '<script>alert("'.$mensagem.'")</script>';
	}
}
?>