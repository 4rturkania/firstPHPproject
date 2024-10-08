<?php

declare(strict_types=1);

namespace App;

require_once("src/Utils/debug.php");
require_once("src/View.php");
require_once("src/Controller.php");

// error_reporting(0);
// ini_set('display_errors', '0');

const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();
$controller = new Controller();

switch ($action) {
    case 'create':
        $page = 'create';
        $created = false;

        if (!empty($_POST)) {
            $created = true;
            $viewParams = [
                "title" => $_POST["title"],
                "description" => $_POST["description"]
            ];
        }
        $viewParams['created'] = $created;
        break;
    case 'show':
        $viewParams = [
            "title" => 'Tytuł notatki',
            "description" => 'Treść notatki'
        ];
        break;
    default:
        $page = 'list';
        $viewParams['resultList'] = "wyświetlamy notatki";
}

$view->render($action, $viewParams);
