<?php
	class RegisterController
	{
		public function index(){

			$name = $_POST['name'];
			$surname = $_POST['surname'];

			if(isset($name) && isset($surname)){
				echo 123;
			}

			// header('Location: /app/controllers/register.php');
		}
	}