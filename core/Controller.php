<?php
	
	namespace Core;
	
	class Controller
	{
		
		public function view($view)
		{
			
			require './views/layout/header.php';
			include './views/' . $view . '.php';
			require './views/layout/footer.php';
			
		}
		
		public function viewApi($view){
			require './views/layout/api/api_header.php';
			include './api/' . $view . '.php';
		}

		public function webView($view){
			include './api/' .$view. '.php';
		}
		
		
	}