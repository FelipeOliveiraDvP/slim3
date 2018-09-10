<?php 
	require '../vendor/autoload.php';
	require '../config/config.php';
	require '../config/constants.php';

	$app = new \Slim\App(['settings' => $config]);
	// Configuração das views
	$container = $app->getContainer();
	$container['view'] = new \Slim\Views\PhpRenderer('../resources/views/');
	// arquivo de rotas
	require '../app/routes.php';

	$app->run();

 ?>