<div id="root">
	<form class="form" id="register" method="POST" action="">
		Name: <input type="text" name="name">
		Surname: <input type="text" name="surname">
		<button class="" id="">Register</button>
	</form>
</div>

<?php

	$name = $_POST['name'];
	$surname = $_POST['surname'];

	if(isset($name) && isset($surname)){
		echo 123;
	}

	class Register
	{
		public function index(){
			header('Location: /app/controllers/register.php');
		}
	}