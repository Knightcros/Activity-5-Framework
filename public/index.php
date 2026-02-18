<?php
require_once "../app/controllers/studentController.php";

$controller = new studentController();

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        include "../app/views/home.php";
}

require_once "../app/controllers/usersController.php";

$controller = new usersController();

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        include "../app/views/home.php";
}

require_once "../app/controllers/teacherController.php";

$controller = new teacherController();

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        include "../app/views/home.php";
}