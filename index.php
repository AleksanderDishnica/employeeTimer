<?php
/*
	require_once 'autoload.php';

	Header::show([
		'title'=>'Track Employees',
	]); 
*/

$request = $_SERVER['REQUEST_URI'];

$request = explode('/', $request);
$request = end($request);

switch ($request) {
    case '/' :
        require __DIR__ . '/app/views/main.php';
        break;
    case '' :
        require __DIR__ . '/app/views/main.php';
        break;
    case '/register' :
        require __DIR__ . '/app/views/register.view.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/app/views/main.php';
        break;
}