<?php session_start() ?>

<!doctype html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta name='description' content="<?= $title ?>">
		<?php require_once 'css.view.php' ?>
	</head>
	<body class='pb-5'>
		<div class='container' id='coronaContainer'>
			<div class='row no-gutters'>
				<header class='w-100'>
					<nav class='bg-primary text-white text-center pt-2 pb-2'>
						<h1>Employee tracker</h1>
					</nav>
				</header>
			</div>