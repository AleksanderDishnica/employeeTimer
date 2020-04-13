<?php
	/**
	 * @author Aleksander Dishnica <adishnica@yahoo.com>
	 * @return object
	 */
	class ViewsController
	{
		public function __construct($file_name, $array){
			$current_path = getcwd();
echo $current_path.'\app\views\'.$file_name;
			if(file_exists($current_path.'/app/views/'.$file_name)){
				$file_contents = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $file_name . '');
				echo $file_contents . '<br>' . $array;
			}
			else{
				echo 'File does not exist';
			}
		}
	}