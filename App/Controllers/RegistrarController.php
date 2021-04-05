<?php
namespace App\Controllers;

class RegistrarController
{
	
	public function index(){
		if(isset($_POST['registrar'])){
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$senha2 = $_POST['senha2'];

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				\App\Utilidades::alert("E-mail inválido");
				\App\Utilidades::redirect(INCLUDE_PATH."registrar");
			}else if(\App\Models\UsuariosModels::emailExists($email)){
				\App\Utilidades::alert("Esse email já existe");
				\App\Utilidades::redirect(INCLUDE_PATH);
			}
			else if(strlen($senha) < 6){
				\App\Utilidades::alert("Sua senha é fraca");
			}else if($senha != $senha2){
					\App\Utilidades::alert("Senhas não pode ser diferente");
			}
			else {
				$senha = \App\Bcrypt::hash($senha);
				$registro = \App\mysql::conectar()->prepare("INSERT INTO `usuarios`VALUES(null,?,?,?)");
				$registro->execute(array($nome,$email,$senha));
				\App\Utilidades::alert("Registrado com sucesso");
				\App\Utilidades::redirect(INCLUDE_PATH);
				}//else

		}//registrar

		\App\Views\MainView::render("registrar");
	}//index

}//class



?>