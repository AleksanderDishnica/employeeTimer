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

			$base_dir = $_SERVER['DOCUMENT_ROOT'].'/php/3-15-2020/app/views/';

			// Include header partial
			include($base_dir.'partials/header.view.php');

			// Include the desired view
			include($base_dir.$file_name.'.view.php');

			// Include footer partial
			include($base_dir.'partials/footer.view.php');
		}
	}