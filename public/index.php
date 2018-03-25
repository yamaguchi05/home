<?php

require_once '../vendor/autoload.php';

$request = new \Kakeibo\Http\Request($_GET, $_POST, $_SERVER['REQUEST_METHOD']);

$action_name = $request->get('action', 'index');

$app_dir = __DIR__ . '\..\app';

$view = new \Kakeibo\View\TwigAdapter();

if ($action_name === 'index') {
    $controller = new \Kakeibo\Controller\IndexController();
    $controller->set_view($view);
    $response = $controller->index_action($request);
}

$response->send();


