<?php
	class Header extends Controller
	{
		public static function show(array $values){
			return parent::view('index', $values);
		}
	}