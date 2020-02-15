<?php
ini_set('display_errors', true);

require __DIR__ . '/controllers/BookController.php';

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'book';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'search';

if ($controllerName === 'book') {
	$indexController = new BookController();

	if ($actionName === 'search') {
		$indexController->searchAction();
	} elseif ($actionName === 'detail') {
		$indexController->detailAction();
	} elseif ($actionName === 'buy') {
		$indexController->buyAction();
	} else {
		echo "Error: action wasn't found";
		exit;
	}
} else {
	echo "Error: controller wasn't found";
	exit;
}