<?php
	class Route extends Controller
	{
		public static function get($url, $controllerMethod){
			$actual_link = "http://$_SERVER[HTTP_HOST]" . $url;

			$controllerMethod = explode('@', $controllerMethod);

			$controller = $controllerMethod[0];
			$method = $controllerMethod[1];

			$url = explode('/', $url);
			$url = $url[1];

			var_dump('../views/'.$url.'.view.php');
		}
	}