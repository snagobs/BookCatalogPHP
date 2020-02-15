<?php
ini_set('display_errors', true);

require __DIR__ . '/controllers/IndexController.php';
require __DIR__ . '/controllers/AuthorController.php';
require __DIR__ . '/controllers/BookController.php';
require __DIR__ . '/controllers/GenreController.php';

//function __autoload($className){
  //  include __DIR__."$className.php";
//}

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controllerName === 'index') {
    $indexController = new IndexController();

    if ($actionName === 'index') {
        $indexController->indexAction();
    } else {
        echo "Error: action wasn't found";
        exit;
    }
} elseif ($controllerName === 'author') {
    $authorController = new AuthorController();

    if ($actionName === 'list') {
        $authorController->listAction();
    } elseif ($actionName === 'add') {
        $authorController->addAction();
    } elseif ($actionName === 'edit') {
        $authorController->editAction();

    } elseif ($actionName === 'delete') {
        $authorController->deleteAction();
    } else {
        echo "Error: action wasn't found";
        exit;
    }
} elseif ($controllerName === 'book') {
    $bookController = new bookController();

    if ($actionName === 'list') {
        $bookController->listAction();

    } elseif ($actionName === 'add') {
        $bookController->addAction();

    } elseif ($actionName === 'edit') {
        $bookController->editAction();
    } elseif ($actionName === 'delete') {
        $bookController->deleteAction();
    }else {
        echo "Error: book action wasn't found";
        exit;
    }
} elseif ($controllerName === 'genre') {
    $genreController = new GenreController();

    if ($actionName === 'list') {
        $genreController->listAction();
    } elseif ($actionName === 'add') {
        $genreController->addAction();
    } elseif ($actionName === 'edit') {
        $genreController->editAction();

    } elseif ($actionName === 'delete') {
        $genreController->deleteAction();
    } else {
        echo "Error: action wasn't found";
        exit;
    }
} else {
    echo "Error: controller wasn't found";
    exit;
}



