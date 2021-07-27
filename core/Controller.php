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
			require './app/config/conn.php';
			include './views/' . $view . '.php';
		}

		public function viewWeb($view)
		{
			require './views/layout/web/header.php';
			include './views/' .$view. '.php';
			require './views/layout/web/footer.php';
		}

		public function viewApiPost($view){
		  // BD
      require './app/config/conn.php';

		  //CORS
		  require './app/config/cors.php';

		  // GET DATA FORM
      require './app/config/getDataForm.php';

      // VIEW RENDER
      require './views/' .$view. '.php';
    }
		
		
	}

