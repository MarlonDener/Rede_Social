<?php
namespace App\Controllers;


class HomeController
{
	
	public function index(){
		if(isset($_SESSION['login'])){
			\App\Views\MainView::render("home");
		}else{
			\App\Views\MainView::render("registrar");
		}
	}

}



?>