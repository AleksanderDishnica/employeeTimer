<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 * @return object
	 */
	class ViewsController{
		/**
		 * @return Object
		 */
		public static function view($file_name, $items = []){
			extract($items);

			$base_dir = $_SERVER['DOCUMENT_ROOT'].'/javascript/4-13-2020/app/views/';

			// Include header partial
			include($base_dir.'partials/header.view.php');

			// Include the desired view
			include($base_dir.$file_name.'.view.php');

			// Include footer partial
			include($base_dir.'partials/footer.view.php');
		}

		public static function route($route){
			echo 'routes/web.php';
		}
	}